// ইমেজ পরিবর্তন করার ফাংশন
function changeImage(src) {
    const mainImg = document.getElementById('main-view');
    mainImg.src = src;
}

// ইমেজ এনলার্জ ও ক্লোজ করার ফাংশন
function toggleZoom(img) {
    if (img.classList.contains('enlarged')) {
        img.classList.remove('enlarged');
    } else {
        img.classList.add('enlarged');
    }
}

// অর্ডার ফর্ম সাবমিশন অ্যালার্ট
function confirmOrder() {
    alert('thank you! your order for plugbox has been received.');
    return true;
}