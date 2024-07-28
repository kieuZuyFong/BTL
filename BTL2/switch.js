const body =document.body;
        const switch_mode  = document.querySelector('#switch-mode i');
        switch_mode.addEventListener('click', () =>{
            body.classList.toggle('dark');
            switch_mode.classList.toggle('bi-moon-stars-fill');
            switch_mode.classList.toggle('bi-brightness-high');
        })