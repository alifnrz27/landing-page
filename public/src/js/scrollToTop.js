function scrollToTop() {
    const scrollContainer = document.querySelectorAll('[x-ref="scrollContainer"]');
    //if (scrollContainer) {
        scrollContainer.forEach((element) => {
            element.scrollTop = 0;
        })
}
