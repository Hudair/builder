<?php
namespace App\Utilities\Builder;
use App\Utilities\Builder\Request;
class Mailer extends Request {

	private $_current_form = null;
	private $_current_zip = null;
	private $_smtp_trigger = true;
	private $_aweber_trigger = true;

	public function __construct($form, $zip) {
		$this->_current_form = $form;
		$this->_current_zip = $zip;
	}

	public function Get_sanding_mail_code($type) {

		switch ($type) {
			case "smtp":
				return $this->_smtp();
				break;
			case "mailchimp":
				return $this->_mailchimp();
				break;
			case "mailerlite":
				return $this->_mailerlite();
				break;
			case "activecampaing":
				return $this->_activecampaing();
				break;
			case "getresponse":
				return $this->_getresponse();
				break;
			case "aweber":
				return $this->_aweber();
				break;
			case "campaignmonitor":
				return $this->_campaignmonitor();
				break;
			case "simple-mail-php":
			default:
				return $this->_simple_mail_php();
				break;
		}
	}

	private function _simple_mail_php() {
	    if(!empty($this->_current_form->settings)){
            $subject = $this->_validation( $this->_current_form->settings->subject,
                'string' ) ? $this->_current_form->settings->subject : '';
            $email   = $this->_validation( $this->_current_form->settings->email, 'email' ) ?
                $this->_current_form->settings->email : '';
            $id      = $this->_validation( $this->_current_form->settings->id, 'string' ) ?
                $this->_current_form->settings->id : '';
        }else{
            $subject = '';
            $email = '';
            $id = '';
        }

        $content = '
		$mailto = "' . $email . '";

		$data_array = json_decode($_POST[\'data\']);
		$message = "";
		foreach ($data_array as $key => $value) {
			if (isset($value->name) && $value->name !== "") {
				$message .= $value->name.\': \'.$value->value.\'<br>\';
			}
		}

		$subject = "' . $subject . '";

		// a random hash will be necessary to send mixed content
		$separator = md5(time());

		// carriage return type (RFC)
		$eol = "\r\n";

		// main header (multipart mandatory)
		$headers = "From: $mailto" . $eol;
		$headers .= "Reply-To: $mailto" . $eol;
		$headers .= "MIME-Version: 1.0" . $eol;
		$headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
		$headers .= "Content-Transfer-Encoding: 7bit" . $eol;
		$headers .= "This is a MIME encoded message." . $eol;

		// message
		$body = "--" . $separator . $eol;
		$body .= "Content-Type: text/html; charset=iso-8859-1" . $eol;
		$body .= "Content-Transfer-Encoding: 8bit" . $eol . $eol;
		$body .= "<div>" . $message . "</div>" . $eol . $eol;

		foreach( $_FILES as $file) {
			if ( !move_uploaded_file( $file[\'tmp_name\'], dirname(__FILE__) . \'/../tmp/\' . $file[\'name\'] ) ) {
				echo "error upload file: " . $file[\'name\'];
				continue;
			}
			$filename = $file[\'name\'];
			$path = dirname(__FILE__) . \'/../tmp\';
			$file = $path . "/" . $filename;

			$content = file_get_contents($file);
			$content = chunk_split(base64_encode($content));

			// attachment
			$body .= "--" . $separator . $eol;
			$body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
			$body .= "Content-Transfer-Encoding: base64" . $eol;
			$body .= "Content-Disposition: attachment" . $eol . $eol;
			$body .= $content . $eol . $eol;
		}

		$body .= "--" . $separator . "--";

		//SEND Mail
		if (mail($mailto, $subject, $body, $headers)) {
			echo "mail send ... OK"; // or use booleans here
		} else {
			echo "mail send ... ERROR!";
			print_r( error_get_last() );
		}
	';

			return $content;
		}

		private function _mailchimp() {
			$api_key = $this->_validation( $this->_current_form->settings->apiKeymailchimp,
				'string' ) ? $this->_current_form->settings->apiKeymailchimp : '';
			$list_id   = $this->_validation( $this->_current_form->settings->listIdmailchimp, 'string' ) ?
				$this->_current_form->settings->listIdmailchimp : '';
			$id      = $this->_validation( $this->_current_form->settings->id, 'string' ) ?
				$this->_current_form->settings->id : '';

			$content = '
	if($_POST[\'id\'] === "' . $id . '") {
		$stack = json_decode($_POST[\'data\']);
		$email = "";
		foreach ($stack as $key => $value) {
			if (strtolower($value->name_attr) == "email") {
				$email = $value->value;
			}
			$data[strtolower($value->name_attr)] = $value->value;
		}

		foreach( $_FILES as $file) {
			if ( !move_uploaded_file( $file[\'tmp_name\'], dirname(__FILE__) . \'/../tmp/\' . $file[\'name\'] ) ) {
				echo "error upload file";
			}
		}

		$apiKey = \''.$api_key.'\';
	    $listId = \''.$list_id.'\';

	    $memberId = md5(strtolower($email));
	    $dataCenter = substr($apiKey,strpos($apiKey,\'-\')+1);

	    $url = \'https://\' . $dataCenter . \'.api.mailchimp.com/3.0/lists/\' . $listId . \'/members/\' . $memberId;

	    $json = json_encode( array(
			\'email_address\' => $email,
	        \'status\'        => \'subscribed\', // "subscribed","unsubscribed","cleaned","pending"
	        \'merge_fields\'  => $data
	    ) );

	    $ch = curl_init($url);

	    curl_setopt($ch, CURLOPT_USERPWD, \'user:\' . $apiKey);
	    curl_setopt($ch, CURLOPT_HTTPHEADER, [\'Content-Type: application/json\']);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, \'PUT\');
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

	    $result = curl_exec($ch);
	    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	    $err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  header("HTTP/1.1 406 Not Acceptable");
		  echo "cURL Error #:" . $err;
		} else {
		  echo $httpCode;
		}
	}';

			return $content;
		}

		private function _smtp() {
			$subject = $this->_validation( $this->_current_form->settings->subject,
				'string' ) ? $this->_current_form->settings->subject : '';
			$email   = $this->_validation( $this->_current_form->settings->email, 'email' ) ?
				$this->_current_form->settings->email : '';
			$id      = $this->_validation( $this->_current_form->settings->id, 'string' ) ?
				$this->_current_form->settings->id : '';
			$host = $this->_validation( $this->_current_form->settings->host, 'string' ) ?
				$this->_current_form->settings->host : '';
			$user_name = $this->_validation( $this->_current_form->settings->userName, 'string' ) ?
				$this->_current_form->settings->userName : '';
			$pass = $this->_validation( $this->_current_form->settings->password, 'string' ) ?
				$this->_current_form->settings->password : '';
			$secure = $this->_validation( $this->_current_form->settings->secure, 'string' ) ?
				$this->_current_form->settings->secure : '';
			$port = $this->_validation( $this->_current_form->settings->port, 'string' ) ?
				$this->_current_form->settings->port : '';

			$content = '
	
		require_once \'smtp/PHPMailerAutoload.php\';

		$to = "' . $email . '"; // Your e-mail address here.

		$data_array = json_decode($_POST[\'data\']);

		$body = "";
		foreach ($data_array as $key => $value) {
			if (isset($value->name) && $value->name !== "") {
				$body .= $value->name.\': \'.$value->value.\'<br>\';
			}
		}

		$mail = new PHPMailer;

		//$mail->SMTPDebug = 3;                               	// Enable verbose debug output

		$mail->isSMTP();                                      	// Set mailer to use SMTP
		$mail->Host = "' . $host . '";  		// Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               	// Enable SMTP authentication
		$mail->Username = "' . $user_name . '";  // SMTP username
		$mail->Password = "' . $pass . '";  // SMTP password
		$mail->SMTPSecure = "' . $secure . '";  // Enable TLS encryption, `ssl` also accepted
		$mail->Port = "' . $port . '";          // TCP port to connect to

		$mail->setFrom("' . $user_name . '");
		$mail->addAddress($to);     							// Add a recipient

		$mail->isHTML(true);                                  	// Set email format to HTML

		$mail->Subject = "' . $subject . '";
		$mail->Body    = $body;
		$mail->AltBody = \'This is the body in plain text for non-HTML mail clients\';

		foreach( $_FILES as $file) {
			if ( !move_uploaded_file( $file[\'tmp_name\'], dirname(__FILE__) . \'/../tmp/\' . $file[\'name\'] ) ) {
				echo "error upload file";
				continue;
			}

			$file_to_attach = dirname(__FILE__) . \'/../tmp/\' . $file[\'name\'];
			$mail->AddAttachment( $file_to_attach , $file[\'name\'] );
		}

		if(!$mail->send()) {
			header("HTTP/1.1 406 Not Acceptable");
			echo \'Message could not be sent.\';
			echo \'Mailer Error: \' . $mail->ErrorInfo;
		} else {
			echo \'Message has been sent\';
		}
	';

			if ($this->_smtp_trigger) {
				$this->_smtp_trigger = false;
				$this->_add_api(SUPRA_BASE_PATH.'/include/common/smtp', 'scripts/smtp');
			}

			return $content;
		}

		private function _mailerlite() {
			$api_key = $this->_validation( $this->_current_form->settings->apiKeymailerlite,
				'string' ) ? $this->_current_form->settings->apiKeymailerlite : '';
			$list_id   = $this->_validation( $this->_current_form->settings->listIdmailerlite, 'string' ) ?
				$this->_current_form->settings->listIdmailerlite : '';
			$id      = $this->_validation( $this->_current_form->settings->id, 'string' ) ?
				$this->_current_form->settings->id : '';

			$content = '
	if($_POST[\'id\'] === "' . $id . '") {

		$stack = json_decode($_POST[\'data\']);

		$custom_fields = array();

		foreach ($stack as $key => $value) {
			$data[strtolower($value->name_attr)] = $value->value;
			if ($value->name_attr !== "email" && $value->name_attr !== "name") {
				$custom_fields[$value->name_attr] = $value->value;
			}
		}

		foreach( $_FILES as $file) {
			if ( !move_uploaded_file( $file[\'tmp_name\'], dirname(__FILE__) . \'/../tmp/\' . $file[\'name\'] ) ) {
				echo "error upload file";
			}
		}

		$subscriber = array(
		    \'email\' => $data[\'email\'],
		    \'name\' => $data[\'name\'],
		    \'fields\' => $custom_fields
		);

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.mailerlite.com/api/v2/groups/' . $list_id . '/subscribers",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => json_encode($subscriber),
		  CURLOPT_HTTPHEADER => array(
		    "content-type: application/json",
		    "x-mailerlite-apikey: ' . $api_key . '"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  header("HTTP/1.1 406 Not Acceptable");
		  echo "cURL Error #:" . $err;
		} else {
		  echo $response;
		}
	}';

		return $content;
	}

	private function _activecampaing() {
		$api_key = $this->_validation( $this->_current_form->settings->apiKeyactivecampaing,
			'string' ) ? $this->_current_form->settings->apiKeyactivecampaing : '';
		$list_id = $this->_validation( $this->_current_form->settings->listIdactivecampaing,
			'string' ) ? $this->_current_form->settings->listIdactivecampaing : '';

		$id      = '';
		if ( $this->_validation( $this->_current_form->settings->id, 'string' ) ) {
			$id = $this->_current_form->settings->id;
		}

		$url      = '';
		if ( $this->_validation( $this->_current_form->settings->accessUrl, 'url' ) ) {
			$url = $this->_current_form->settings->accessUrl;
		}

		$content = '
	if($_POST[\'id\'] === "' . $id . '") {
		$url = \'' . $url . '\';

		$stack = json_decode($_POST[\'data\']);

		$custom_fields = array();

		foreach( $_FILES as $file) {
			if ( !move_uploaded_file( $file[\'tmp_name\'], dirname(__FILE__) . \'/../tmp/\' . $file[\'name\'] ) ) {
				echo "error upload file";
			}
		}

		foreach ($stack as $key => $value) {
			$data[strtolower($value->name_attr)] = $value->value;
			if ($value->name_attr !== "email" &&
				$value->name_attr !== "first_name" &&
				$value->name_attr !== "last_name" &&
				$value->name_attr !== "phone" &&
				$value->name_attr !== "orgname" &&
				$value->name_attr !== "tags"
			) {
				$custom_fields["field[%" . $value->name_attr . "%,0]" ] = $value->value;
			}
		}

		$params = array(
		    \'api_key\'      => \'' . $api_key . '\',
		    \'api_action\'   => \'contact_add\',
		    \'api_output\'   => \'json\',
		);

		$post = array(
		    \'email\'                    => $data[\'email\'],
		    \'first_name\'               => isset($data[\'first_name\']) ? $data[\'first_name\'] : "",
		    \'last_name\'                => isset($data[\'last_name\']) ? $data[\'last_name\'] : "",
		    \'phone\'                    => isset($data[\'phone\']) ? $data[\'phone\'] : "",
		    \'orgname\'                  => isset($data[\'orgname\']) ? $data[\'orgname\'] : "",
		    \'tags\'                     => isset($data[\'tags\']) ? $data[\'tags\'] : "",
		    \'p[' . $list_id . ']\'                 => ' . $list_id . ',
		    \'status[' . $list_id . ']\'            => 1,
		    \'instantresponders[' . $list_id . ']\' => 1,
		);

		$post = array_merge($custom_fields, $post);

		$query = "";
		foreach( $params as $key => $value ) $query .= urlencode($key) . \'=\' . urlencode($value) . \'&\';
		$query = rtrim($query, \'& \');

		$data = "";
		foreach( $post as $key => $value ) $data .= urlencode($key) . \'=\' . urlencode($value) . \'&\';
		$data = rtrim($data, \'& \');

		$url = rtrim($url, \'/ \');

		if ( !function_exists(\'curl_init\') ) die(\'CURL not supported. (introduced in PHP 4.0.2)\');

		if ( $params[\'api_output\'] == \'json\' && !function_exists(\'json_decode\') ) {
		    die(\'JSON not supported. (introduced in PHP 5.2.0)\');
		}

		$api = $url . \'/admin/api.php?\' . $query;

		$request = curl_init($api);
		curl_setopt($request, CURLOPT_HEADER, 0);
		curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($request, CURLOPT_POSTFIELDS, $data);
		curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($request, CURLOPT_FOLLOWLOCATION, true);

		$response = (string)curl_exec($request);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  header("HTTP/1.1 406 Not Acceptable");
		  echo "cURL Error #:" . $err;
		} else {
		  echo $response;
		}
	}';

			return $content;
		}

		private function _getresponse() {
			$api_key = $this->_validation( $this->_current_form->settings->apiKeyGetresponse,
				'string' ) ? $this->_current_form->settings->apiKeyGetresponse : '';
			$campaing_token = $this->_validation( $this->_current_form->settings->campaingToken,
				'string' ) ? $this->_current_form->settings->campaingToken : '';

			$id      = '';
			if ( $this->_validation( $this->_current_form->settings->id, 'string' ) ) {
				$id = $this->_current_form->settings->id;
			}

			$content = '
	if($_POST[\'id\'] === "' . $id . '") {

		$stack = json_decode($_POST[\'data\']);

		$custom_fields = array();

		foreach( $_FILES as $file) {
			if ( !move_uploaded_file( $file[\'tmp_name\'], dirname(__FILE__) . \'/../tmp/\' . $file[\'name\'] ) ) {
				echo "error upload file";
			}
		}

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.getresponse.com/v3/custom-fields",
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "content-type: application/json",
		    "X-Auth-Token: api-key ' . $api_key . '"
		  ),
		));

		$fields = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($fields) {
			$fields = json_decode($fields);
		} else {
			return;
		}

		foreach ($stack as $key => $value) {
			$data[strtolower($value->name_attr)] = $value->value;
			if ($value->name_attr !== "email" && $value->name_attr !== "name") {
				foreach($fields as $field) {
					if ($field->name == $value->name_attr) {
						$custom_fields[] = array( "customFieldId" => $field->customFieldId, "value" => array( $value->value ) );
					}
				}
			}
		}

		$subscriber = array(
		    \'email\' => $data[\'email\'],
		    \'name\' => $data[\'name\'],
		    \'campaign\' => array(
		        \'campaignId\' => \'' . $campaing_token . '\'
		    ),
		    \'customFieldValues\' => $custom_fields
		);

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.getresponse.com/v3/contacts",
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => json_encode($subscriber),
		  CURLOPT_HTTPHEADER => array(
		    "content-type: application/json",
		    "X-Auth-Token: api-key ' . $api_key . '"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  header("HTTP/1.1 406 Not Acceptable");
		  echo "cURL Error #:" . $err;
		} else {
		  echo $response;
		}
	}';

			return $content;

		}

		private function _aweber() {
			$list_id = $this->_validation( $this->_current_form->settings->listIdAweber,
				'string' ) ? $this->_current_form->settings->listIdAweber : '';

			$id      = '';
			if ( $this->_validation( $this->_current_form->settings->id, 'string' ) ) {
				$id = $this->_current_form->settings->id;
			}

			$content = '
	if($_POST[\'id\'] === "' . $id . '") {

		require_once(\'aweber_api/aweber_api.php\');

		$stack = json_decode($_POST[\'data\']);

		$custom_fields = array();

		foreach ($stack as $key => $value) {
			$data[strtolower($value->name_attr)] = $value->value;
			if ($value->name_attr !== "email" && $value->name_attr !== "name") {
				$custom_fields[$value->name_attr] = $value->value;
			}
		}

		foreach( $_FILES as $file) {
			if ( !move_uploaded_file( $file[\'tmp_name\'], dirname(__FILE__) . \'/../tmp/\' . $file[\'name\'] ) ) {
				echo "error upload file";
			}
		}

	$consumerKey    = \'Ak48wjRm2ynLzEWlfu1wTWv1\';
	$consumerSecret = \'PrJWMR4ggpMT4oInOlxt5b91IkkRJ7K9otLEprc4\';
	$accessKey      = \'' . $_COOKIE['accessToken'] . '\';
	$accessSecret   = \'' . $_COOKIE['accessTokenSecret'] . '\';
	$list_id        = \'' . $list_id . '\';

	$aweber = new AWeberAPI($consumerKey, $consumerSecret);

	try {
	    $account = $aweber->getAccount($accessKey, $accessSecret);
	    $listURL = "/accounts/$account->id/lists/{$list_id}";
	    $list = $account->loadFromUrl($listURL);

	    $subscriber = array(
		    \'email\' => $data[\'email\'],
		    \'name\' => $data[\'name\'],
		    \'campaign\' => array(
		        \'campaignId\' => \'' . $list_id . '\'
		    ),
		    \'custom_fields\' => $custom_fields
		);

	    $subscribers = $list->subscribers;
	    $new_subscriber = $subscribers->create($subscriber);

	    # success!
	    print "A new subscriber was added to the $list->name list!";

	} catch(AWeberAPIException $exc) {
		header("HTTP/1.1 406 Not Acceptable");
	    print "<h3>AWeberAPIException:</h3>";
	    print " <li> Type: $exc->type              <br>";
	    print " <li> Msg : $exc->message           <br>";
	    print " <li> Docs: $exc->documentation_url <br>";
	    print "<hr>";
	    exit(1);
	}
	}';

		if ($this->_aweber_trigger) {
			$this->_aweber_trigger = false;
			$this->_add_api(SUPRA_BASE_PATH.'/include/common/aweber_api', 'scripts/aweber_api');
		}

		return $content;
	}

	private function _campaignmonitor() {
		$api_key = $this->_validation( $this->_current_form->settings->apiKeycampaignmonitor,
			'string' ) ? $this->_current_form->settings->apiKeycampaignmonitor : '';
		$list_id = $this->_validation( $this->_current_form->settings->listIdcampaignmonitor,
			'string' ) ? $this->_current_form->settings->listIdcampaignmonitor : '';

		$id      = '';
		if ( $this->_validation( $this->_current_form->settings->id, 'string' ) ) {
			$id = $this->_current_form->settings->id;
		}

		$content = '
if($_POST[\'id\'] === "' . $id . '") {

	$stack = json_decode($_POST[\'data\']);

	$custom_fields = array();

	foreach ($stack as $key => $value) {
		$data[strtolower($value->name_attr)] = $value->value;
		if ($value->name_attr !== "email" && $value->name_attr !== "name") {
			$custom_fields[] = array( "key" => $value->name_attr, "value" => $value->value );
		}
	}

	foreach( $_FILES as $file) {
		if ( !move_uploaded_file( $file[\'tmp_name\'], dirname(__FILE__) . \'/../tmp/\' . $file[\'name\'] ) ) {
			echo "error upload file";
		}
	}

	$subscriber = array(
	    \'EmailAddress\' => $data[\'email\'],
	    \'Name\' => $data[\'name\'],
	    \'CustomFields\' => $custom_fields,
		\'Resubscribe\' => true,
		\'RestartSubscriptionBasedAutoresponders\' => true
	);

	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://api.createsend.com/api/v3.1/subscribers/' . $list_id . '.json",
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_USERPWD => "' . $api_key . ':x",
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_SSL_VERIFYPEER => false,
	  CURLOPT_POSTFIELDS => json_encode($subscriber)
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
	  header("HTTP/1.1 406 Not Acceptable");
	  echo "cURL Error #:" . $err;
	} else {
	  echo $response;
	}
}';

		return $content;
	}

	private function _add_api($source, $destionation) {
		$files  = scandir( $source );
		unset( $files[0] );
		unset( $files[1] );
		foreach ( $files as $file ) {
			$this->_current_zip->addFile(
				$source . '/' . $file
				, $destionation . '/' . $file
			);
		}
	}
}
