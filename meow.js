// darkmode toggle
let darkmode = localStorage.getItem("meow")
const themeSwitch = document.getElementById("jew")

const enableDarkmode = () => {
    document.body.classList.add("darkmode")
    localStorage.setItem("meow", "active")
}
const disableDarkmode = () =>{
    document.body.classList.remove("darkmode")
    localStorage.setItem("meow", null)
}
if(darkmode === "active") enableDarkmode()

themeSwitch.addEventListener("click", () => {
    darkmode = localStorage.getItem("meow")
    darkmode !== "active" ? enableDarkmode() : disableDarkmode()
})
//

// Pop up box
const openBtn = document.getElementById("open");
const closeBtn = document.getElementById("close");
const modal = document.getElementById("boxy");

openBtn.addEventListener("click",() => {
    modal.classList.add("open")
})
closeBtn.addEventListener("click",() => {
    modal.classList.remove("open")
})
//

// Recipe submission
const submitBtn = document.getElementById("close")

submitBtn.addEventListener("click", () => {
    const recipename = document.getElementById("recipename").value
    const img = document.getElementById("img").value
    const desc = document.getElementById("desc").value
    // reset form after submission
    document.getElementById("data-form").reset();
    //
});