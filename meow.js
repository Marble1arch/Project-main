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



function Addingfunction(){
    
}