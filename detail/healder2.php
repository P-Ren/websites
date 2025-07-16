<nav class="navbar navbar-expand-lg navbar-light bg-light rounded-lg shadow-sm mb-5">
    <div class="container-fluid">

        <img src="../img/logo.svg" alt="Logo" class="d-inline-block align-text-top me-2 rounded" style="width: 150px;">

        <button class="btn btn_hidden" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           <i class="fas fa-bars btn_color" id="menu-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav tag">
                <li class="nav-item magin">
                    <a class="nav-link active" aria-current="page" href="../../index.php">Home</a>
                </li>
                <li class="nav-item magin">
                    <a class="nav-link" href="../../Gashob.php">GasHob</a>
                </li>
                <li class="nav-item magin">
                    <a class="nav-link" href="../../Gas_stove.php">GasStove</a>
                </li>
                <li class="nav-item magin">
                    <a class="nav-link" href="../../Hob.php">Cooker Hob</a>
                </li>
                <li class="nav-item magin">
                    <a class="nav-link" href="../../Oven.php">Oven & Microwave</a>
                </li>
                <li class="nav-item magin">
                    <a class="nav-link" href="../../Hood.php">Hood</a>
                </li>
                <li class="nav-item magin">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<style>
  .btn_color {
       color: rgb(249, 173, 9);
       font-size: 1.5rem;
       width: 50px;
       padding-top: 12px;
       height: 50px;
       border-radius: 100px;
       background-color: rgb(242, 238, 229);
    }
    .btn{
        border: none;
    }
    .carousel-item{
        border-color: white;
    }
    .btn_hidden{
        display: none;
    }
    @media (max-width:768px) {  /* Inter menu down */
    .btn_hidden{
        display: inline-block;
    }
    .btn_color:hover {
       color: rgb(255, 255, 255);
       font-size: 1.5rem;
       width: 50px;
       padding-top: 12px;
       height: 50px;
       border-radius: 100px;
       background-color: rgb(255, 161, 46);
    }
}
</style>