function nav(element) {
    element.addEventListener("change", function(){
        window.location.href = this.value;
    })

}

export default nav;
