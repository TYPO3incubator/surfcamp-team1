function sizes(element) {
    element.querySelectorAll('.product-detail--sizes a').forEach((size) =>{
        size.addEventListener("click", function(){
            const sizes = element.querySelectorAll('.product-detail--sizes a');
            const properties = document.querySelectorAll('.product-detail--properties div');

            removeClass(properties, 'active')
            removeClass(sizes, 'active');

            this.classList.add("active")
            document.querySelector(`.product-detail--properties #${this.getAttribute('id')}`).classList.add('active');
        })
    })

    function removeClass(array, className){
        array.forEach((e) => {
            e.classList.remove(className)
        })
    }
}

export default sizes;
