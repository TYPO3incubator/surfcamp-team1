import example from "./js/example";
import general from "./js/general";
import sizes from "./js/sizes";

import 'bootstrap/js/dist/carousel';
import 'bootstrap/js/dist/collapse';

document.addEventListener("DOMContentLoaded", function () {
    //general
    general()

    //example
    const exampleElements = document.querySelectorAll(".exampleSection");
    for (const exampleElement of exampleElements) {
        example(exampleElement);
    }

    const sizesElements = document.querySelectorAll(".product-detail--sizes");
    for (const sizesElement of sizesElements) {
        sizes(sizesElement);
    }
});
