import example from "./js/example";
import general from "./js/general";
import sizes from "./js/sizes";
import nav from "./js/nav";

import 'bootstrap/js/dist/carousel';
import 'bootstrap/js/dist/collapse';

document.addEventListener("DOMContentLoaded", function () {

    //example
    const exampleElements = document.querySelectorAll(".exampleSection");
    for (const exampleElement of exampleElements) {
        example(exampleElement);
    }

    const sizesElements = document.querySelectorAll(".product-detail--sizes");
    for (const sizesElement of sizesElements) {
        sizes(sizesElement);
    }
    const languageElements = document.querySelectorAll(".language-menu");
    for (const languageElement of languageElements) {
        nav(languageElement);
    }

    //general
    general()
});
