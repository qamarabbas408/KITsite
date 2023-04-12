$(document).ready(function () {
    $('#delete-section').hide();
    // Add new accordion section
    $("#add-accordion").click(function (event) {
        console.log("clicked");
        event.preventDefault();
        // Clone the first accordion section
        var newAccordion = $("#accordionExample").clone();

        // Increment the ID of the new accordion section
        var newID = "accordionExample-" + ($(".accordion").length + 1);
        newAccordion.attr("id", newID);

        // Change the heading text and collapse ID of the new accordion section
        var newHeading = newAccordion.find(".accordion-button");
        newHeading.text("Section " + ($(".accordion").length + 1));
        newHeading.attr("data-bs-target", "#" + newID);

        // Change the collapse ID of the new accordion body
        var newBody = newAccordion.find(".accordion-collapse");
        newBody.attr("id", newID);

        // Clear the form inputs in the new accordion section
        newAccordion.find("input[type='text'], input[type='file'], textarea").val("");

        // Add the new accordion section to the container
        $("#accordion-container").append(newAccordion);
        $('#delete-section').show();

    });

});
