
function setupCheckbox() {
    const todos = document.querySelectorAll("#todos-form input[type='checkbox']")
    todos.forEach(todo => {
        todo.addEventListener("change", async () => {
            const todoid = todo.id
            const checked = todo.checked;
            const token = document.head.querySelector("meta[name='_token']").content;
            await fetch(`/toggle/${todoid}`, {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": token,
                    "content-type": "application/json"
                },
                body: JSON.stringify({
                    checked: checked
                })
            });
            if (checked === true) {
                document.getElementById(`taskp${todoid}`).classList.add("line-through");
            } else if (checked === false) {
                document.getElementById(`taskp${todoid}`).classList.remove("line-through");
            }
            // de text css met of zonder linethrough

        })
    });

}

setupCheckbox();