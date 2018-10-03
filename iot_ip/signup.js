    // e.preventDefault();
    var modal = document.getElementById('signup_form');

    window.onclick = function(event){
        if(event.target == modal){
            modal.style.display = "none"
        }
    }