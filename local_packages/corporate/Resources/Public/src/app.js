import example from "./js/example";
import general from "./js/general";

document.addEventListener("DOMContentLoaded", function () {
    //general
    general()

    //example
    const exampleElements = document.querySelectorAll(".exampleSection");
    for (const exampleElement of exampleElements) {
        example(exampleElement);
    }
});
