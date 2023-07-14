$(document).ready(function () {
    var accordionCounter = 1;
    var moduleCounter = 1;
    $("#delete-accordion").hide();
    var inputModuleName = $("#moduleName");

    // Add new accordion section
    $("#add-accordion").click(function (event) {
        event.preventDefault();

        // Clone the first accordion section
        var newAccordion = $("#section-accordion").clone();

        // Increment the accordion counter
        accordionCounter++;
        moduleCounter++;

        // Set the ID of the new accordion section
        var newID = "section-accordion-" + accordionCounter;
        newAccordion.attr("id", newID);

        // Set the heading text and collapse ID of the new accordion section
        var newHeading = newAccordion.find(".accordion-button");
        newHeading.text("Module " + moduleCounter);
        inputModuleName.val("module"+moduleCounter);
        
        // console.log(moduleName);
        newHeading.attr("data-bs-target", "#" + newID);

        // Set the collapse ID of the new accordion body
        var newBody = newAccordion.find(".accordion-collapse");
        newBody.attr("id", newID);

        // Clear the form inputs in the new accordion section
        newAccordion.find("input[type='text'], input[type='file'], textarea").val("");

        // Add the new accordion section to the container
        $("#accordion-container").append(newAccordion);

        $("#delete-accordion").show();

    });

    // Delete Section button click event handler
    $('#delete-accordion').on('click', function (event) {
        event.preventDefault();

        // Remove the most recently added accordion
        var numAccordions = $('.accordion').length;
        if (numAccordions > 1) {
            $("#accordion-container .accordion:last-child").remove();
            moduleCounter--;
        } else {
            $("#accordion-container .accordion:first-child").find("input[type='text'], input[type='file'], textarea").val("");
        }

        // Hide delete button if there is only one accordion
        if (numAccordions === 2) {
            $('#delete-accordion').hide();
        }
    });
    
   



});
