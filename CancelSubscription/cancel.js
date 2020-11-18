function verify() {
    if (document.getElementById("subscriptions").selectedIndex == 0) {
        alert('Please select a subscription to be removed.');
        return false;
    } else {
        alert('Subscription Removed');
        return true;
    }
}