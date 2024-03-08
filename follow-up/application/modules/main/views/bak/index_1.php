<style>
    * {
        box-sizing: border-box;
    }

    /* Create four equal columns that floats next to each other */
    .column {
        float: left;
        width: 20%;
        padding: 20px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* On screens that are 992px wide or less, go from four columns to two columns */
    @media screen and (max-width: 992px) {
        .column {
            width: 50%;
        }
    }

    /* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .column {
            width: 100%;
            background-color: gray;
        }
    }
    .column:hover  {
        background-color: greenyellow;
    }
/*    .btn {
        background-color: #ddd;
        border: none;
        color: black;
        padding: 16px 32px;
        text-align: center;
        font-size: 16px;
        margin: 4px 2px;
        transition: 0.3s;
    }

    .btn:hover {
        background-color: #3e8e41;
        color: white;
    }    */
</style>



<h2>Layanan</h2>
<p><strong>Resize the browser window to see the responsive effect.</strong> On screens that are 992px wide or less, the columns will resize from four columns to two columns. On screens that are 600px wide or less, the columns will stack on top of each other instead of next to eachother.</p>

<div class="row">
    <div class="column">
        <h2>Column 1</h2>
        <p>Some text..</p>
    </div>
    <div class="column" style="background-color:#bbb;">
        <i class="text-white nav-fa-icon" ></i>
        <h2 class="font-weight-medium text-white">About Us</h2>
    </div>
    <div class="column" style="background-color:#ccc;">
        <h2>Column 3</h2>
        <p>Some text..</p>
        <button class="btn">Hover Over Me</button>
    </div>
    <div class="column" style="background-color:#ddd;">
        <div class="panel panel-default rounded " style="height:100px; width:70px; text-align:  center" >
            <button style="height:120px; width:120px; background-color: #28a4c9; color: black"  class="btn" >
                <i class="fa fa-dollar" style="height:80px; width:80px; font-size: 40px; color:white; border-radius: 50px;  text-align: center; vertical-align:bottom; padding:20px "></i>
                <br>
                Kupon Makan
            </button>
        </div>
    </div>
</div>


<div class="row center" >
    <div class="panel panel-primary">

        <div class="panel-body">
            <div class="col-md-2" >
                <div class="panel panel-default rounded " style="height:100px; width:70px; text-align:  center" >
                    <button style="height:120px; width:120px; background-color: #28a4c9; color: black"  class="btn" >
                        <i class="fa fa-dollar" style="height:80px; width:80px; font-size: 40px; color:white; border-radius: 50px;  text-align: center; vertical-align:bottom; padding:20px "></i>
                        <br>
                        Kupon Makan
                    </button>
                </div>
            </div>

            <div class="col-md-2" >
                <div class="panel panel-default rounded" style="height:100px; width:70px; text-align:  center" >
                    <button style="height:120px; width:120px"  class="btn btn-warning btn_space " >
                        <i class="fa fa-shopping-cart" style="height:80px; width:80px; font-size: 40px; color:white; border-radius: 50px;  text-align: center; vertical-align:bottom; padding:20px "></i>
                        <br>
                        Waserda
                    </button>
                </div>
            </div>
            <div class="col-lg-2 center">
                <div class="panel panel-default rounded" style="height:100px; width:100px" >
                    <button style="height:120px; width:120px" class="btn btn-danger btn_space " >
                        <i class="fa fa-plus" style="height:80px; width:80px; font-size: 40px; color:white; border-radius: 50px;  text-align: center; vertical-align:bottom; padding:20px "></i>
                        <br>
                        Pengobatan
                    </button>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="panel panel-default rounded" style="height:100px; width:100px" >
                    <button style="height:120px; width:120px" class="btn btn-green " >
                        <i class="fa fa-calculator" style="height:80px; width:80px; font-size: 40px; color:white; border-radius: 50px;  text-align: center; vertical-align:bottom; padding:20px "></i>
                        <br>
                        Pinjaman
                    </button>
                </div>
            </div>

            <div class="col-md-2" >
                <div class="panel panel-default rounded " style="height:100px; width:70px; text-align:  center" >
                    <button style="height:120px; width:120px; background-color: #28a4c9; color: black"  class="btn" >
                        <i class="fa fa-dollar" style="height:80px; width:80px; font-size: 40px; color:white; border-radius: 50px;  text-align: center; vertical-align:bottom; padding:20px "></i>
                        <br>
                        Simpanan
                    </button>
                </div>
            </div>
            <div class="col-md-2" >
                <div class="panel panel-default rounded " style="height:100px; width:70px; text-align:  center" >
                    <button style="height:120px; width:120px; background-color: #28a4c9; color: black"  class="btn" >
                        <i class="fa fa-dollar" style="height:80px; width:80px; font-size: 40px; color:white; border-radius: 50px;  text-align: center; vertical-align:bottom; padding:20px "></i>
                        <br>
                        SHU
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>






