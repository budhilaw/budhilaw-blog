(()=>{const e=document.getElementById("theme-toggle"),t=document.documentElement;"dark"===localStorage.theme&&t.classList.add("dark"),e.addEventListener("click",(()=>{t.classList.contains("dark")?(t.classList.remove("dark"),localStorage.theme="light"):(t.classList.add("dark"),localStorage.theme="dark")}))})();