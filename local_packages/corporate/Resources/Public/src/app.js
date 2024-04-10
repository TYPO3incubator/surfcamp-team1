import example from "./js/example";
import general from "./js/general";
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
});
