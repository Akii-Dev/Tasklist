console.log("test")

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
            console.log(checked);
            if (checked == true) {
                `taskp${todoid}`.classList.add("line-through");
            } elseif (checked == false); {
                `taskp${todoid}`.classList.remove("line-through");
            }
            // de text css met of zonder linethrough

        })
    });

}

setupCheckbox();