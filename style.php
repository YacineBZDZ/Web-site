<style>
login register css
.form-container{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
 }
 
 .form-container form{
    padding:2rem;
    border-radius: .5rem;
    border:var(--border);
    background-color: var(--white);
    box-shadow: var(--box-shadow);
    width: 50rem; 
    text-align: center;
 }
 
 .form-container form h3{
    font-size: 2.5rem;
    text-transform: uppercase;
    color:var(--black);
    margin-bottom: 1rem;
 }
 
 .form-container form .box{
    width: 100%;
    padding:1.2rem 1.4rem;
    font-size: 1.8rem;
    color:var(--black);
    border:var(--border);
    background-color: var(--light-bg);
    margin:1rem 0;
    border-radius: .5rem;
 }
 
 .form-container form p{
    margin-top: 1.5rem;
    font-size: 2rem;
    color:var(--light-color);
 }
 
 .form-container form p a{
    color:var(--pink);
 }
 
 .form-container form p a:hover{
    text-decoration: underline;
 }

 @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap');

:root{
   --bleu:#43a3e8;
   --aqua:#2bb9c0;
   --nice:#12f39d;
   --black:#151313;
   --white:#fff;
   --light-color:#1160a1;
   --light-white:#ffffff;
   --light-bg:#ffffff;
   --border:.2rem solid var(--aqua);
   --box-shadow:0 .5rem 1rem rgba(16, 175, 151, 0.304);
}

*{
   font-family: 'Rubik', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   transition:all .2s linear;
}

*::selection{
   background-color: var(--pink);
   color:var(--white);
}

*::-webkit-scrollbar{
   height: .5rem;
   width: 1rem;
}

*::-webkit-scrollbar-track{
   background-color: transparent;
}

*::-webkit-scrollbar-thumb{
   background-color: var(--pink);
}

html{
   font-size: 62.5%;
   overflow-x: hidden;
   scroll-behavior: smooth;
   scroll-padding-top: 6.5rem;
}

body{
   background: var(--light-bg);
}

section{
   padding:3rem 2rem;
}

.btn{
    display: inline-block;
   border-radius: .5rem;
   margin-top: 1rem;
   font-size: 1.8rem;
   color:rgb(22, 75, 173);
   cursor: pointer;
   padding:1rem 3rem;
   text-transform: capitalize;
}
.btn:hover{
    background-color: #12f39d;
}
</style>