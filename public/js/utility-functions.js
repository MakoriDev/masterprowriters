function populatePaperType(url) {
    $.ajax({
        url: url,
        type: "GET",
        dataType: "json",
        async: false,
        success(paperTypes) {
            paperTypes.forEach((paperType) => {
                $('select[name="paper_type"]').append(
                    `<option value="${paperType}" ${
                        paperType === "Academic Report" ? "selected" : ""
                    }>${paperType}</option>`
                );
            });
        },
    });
}

function populatePages(spacing = "double", selectedPage = 1) {
    const wordsCount = (spacing === "double") ? 275 : 275 * 2;
    $('select[name="pages"]').empty()
    for (i = 1; i <= 200; i++) {

        $('select[name="pages"]').append(
            `<option value="${i}" ${(i === selectedPage) ? "selected" : ""}> ${i} pages/ ${i * wordsCount} words</option>`
        );
    }
}

function getOrderPrice(url) {
    const spacing = $("#spacing").val();
    const numberOfPages = $("#pages").val();
    const level = $("#level").val();
    const deadline = $("#deadline").val();

    $.ajax({
        url: url,
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        data: {
            level,
            deadline,
            numberOfPages,
            spacing,
        },
        async: true,
        dataType: "json",
        success(response) {
            const paperType = $("#paper_type").val();
            $('#amount').val(response.price)
            $("#totalCostSummary").text(`$ ${response.price.toFixed(2)}`);
            $("#levelSummary").text(level);
            $("#deadlineSummary").text(deadline);
            $("#paperTypeSummary").text(paperType);
            $("#numberOfPagesSummary").text(numberOfPages);
        },
    });
}
