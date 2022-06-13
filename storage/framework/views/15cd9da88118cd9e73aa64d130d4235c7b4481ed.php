<!-- Modal -->
<div class="modal fade-scale" id="ModalAutos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

	<div class="modal-dialog full-screen" role="document"> <!-- para poner tamaño de modal por bootstrap (modal-lg o modal-sm)-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Normas y Abreviaturas utilizadas.</h4>
				<button type="button" class="close button-modal-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
                <img id="myImg4" src="../images/productos/conversiones/normas-abreviaturas 1.jpg" style="width: 90%; display: block; margin: auto;" alt="matriz" />
                <img id="myImg5" src="../images/productos/conversiones/normas-abreviaturas 2.jpg" style="width: 90%; display: block; margin: auto;" alt="matriz" />
            </div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<!-- The Modal -->
<div id="myModalImg3" class="modal">
    <button onclick="closeMod();" class="close">×</button>
    <img class="modal-content" id="img03">
    <div id="caption3"></div>
</div>


<style>
    #myImg4, #myImg5 {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }


    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1030;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }

    /* Caption of Modal Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    /* Add Animation */
    .modal-content,
    #caption {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
        from {
            -webkit-transform: scale(0)
        }

        to {
            -webkit-transform: scale(1)
        }
    }

    @keyframes  zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
        opacity: 1;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media  only screen and (max-width: 700px) {
        .modal-content {
            width: 100%;
        }

        .zoom:hover {
            left: 25%;
        }
    }


</style>
<script>
    // Get the modal
    var modal = document.getElementById('myModalImg3');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg4');
    var img2 = document.getElementById('myImg5');

    var modalImg = document.getElementById("img03");
    var captionText = document.getElementById("caption3");
    img.onclick = function () {
        modal.style.display = "block";
        modalImg.src = this.src;
        modalImg.alt = this.alt;
        captionText.innerHTML = this.alt;
    }

    img2.onclick = function () {
        modal.style.display = "block";
        modalImg.src = this.src;
        modalImg.alt = this.alt;
        captionText.innerHTML = this.alt;
    }
    function closeMod() {
        modal.style.display = "none";
    }

</script>
<?php /**PATH C:\laragon\www\repoCompletoPertec\pertecPagina\resources\views/page/sections/productos/modalDetalles.blade.php ENDPATH**/ ?>