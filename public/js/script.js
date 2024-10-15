console.log("test")

function deleteSelected() {
    const checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
    // console.log(checkboxes["1"].id)
    // console.log(checkboxes)
    fetch(`destroy/1`, {
        method: "DELETE",
    }
    )
}