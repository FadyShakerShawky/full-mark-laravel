let searchParams = {};
searchParams.searchText = "";
if (document.getElementById("search-key-word")) {
    searchParams.searchText = document.getElementById(
        "search-key-word-text"
    ).innerText;
}
searchParams.maxPrice = document.getElementById("max-price-slider").value;
searchParams.minPrice = document.getElementById("min-price-slider").value;
searchParams.searchCourses = [];
searchParams.minRating = 0;
searchParams.maxRating = 5;
searchParams.discount = false;

function coursesSearchNameHandler(event) {
    if (event.target.checked) {
        searchParams.searchCourses.push(event.target.value);
    } else {
        let index = searchParams.searchCourses.findIndex(
            (element) => element === event.target.value
        );
        if (index) {
            searchParams.searchCourses.splice(index, 1);
        }
    }
}
function priceViewHandler(event, targetDiv) {
    document.getElementById(targetDiv).innerText = event.target.value;
    searchParams.maxPrice = document.getElementById("max-price-slider").value;
    searchParams.minPrice = document.getElementById("min-price-slider").value;
}
function ratingViewHandler(event, targetDiv) {
    document.getElementById(targetDiv).innerText = event.target.value;
    searchParams.maxRating = document.getElementById("max-rating-slider").value;
    searchParams.minRating = document.getElementById("min-rating-slider").value;
}
function filterResults() {
    $.ajax({
        contentType: "application/json",
        data: { searchParams: JSON.stringify(searchParams) },
        url: "http://localhost:8000/courses/search",
        success: (data) => {
            console.log(data);
            if (data.length == 0) {
                document.getElementById("search-result-container").innerHTML =
                    "<h2 class='mt-4 mx-auto'>Sorry no courses could be found</h2>";
            } else {
                document.getElementById("search-result-container").innerHTML =
                    "";
                data.forEach((course) => {
                    document.getElementById(
                        "search-result-container"
                    ).innerHTML += `<div class="mx-auto flex-wrap" style="width: 15rem">
                                    <div class="card">
                                        <img src="./media/science.jpeg" class="card-img-top" alt="science">
                                        <div class="card-body">
                                            <h4 class="card-title">${course.courseName}</h4>
                                            <h5>By : <a href="teacher-profile/${course.teacherId}">${course.teacherName}</a></h5>
                                            <p class="card-text">${course.description}</p>
                                            <a href="course-info/${course.id}" class="btn btn-success">View course</a>
                                        </div>
                                    </div>
                                </div>`;
                });
            }
        },
    });
}

function discountFilterHandler(event) {
    event.target.value == "discount"
        ? (searchParams.discount = true)
        : (searchParams.discount = false);
}
