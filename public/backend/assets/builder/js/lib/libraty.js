/**
 * unwrap only one elements
 */
HTMLElement.prototype.unWrapOne = function(mode) {
    var child = this.children[0];

    var parent = this.parentElement;
    var sibling = this.nextSibling;

    try {
        //if (child.hasAttribute('style')) {
        //    child.removeAttribute('style');
        //}
        //
        //if (this.dataset.style) {
        //    child.setAttribute( 'style', this.dataset.style );
        //}
    }
    catch (e) {
        console.log(this, child);
    }


    if (sibling) {
        parent.insertBefore(child, sibling);
    } else {
        parent.appendChild(child);
    }
    parent.removeChild(this);
};