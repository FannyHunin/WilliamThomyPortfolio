<section id="contact" class="mt-5">
    <h1 style="text-align: left;">Contactez-moi</h1>
    <div class="row">
        <div class="col-6" id="form">
            <form id="divLabel" action="/contact/send" method="post">
                @csrf
                <label for="">
                    Nom :
                    <div style="display: flex; flex-direction : row; justify-content: space-between; width : 100%">
                        <input name="firstName" type="text" placeholder="Prénom" style="width: 48%" required>
                        <input name="lastName" type="text" placeholder="Nom" style="width: 48%" required>  
                    </div>
                    
                </label>
                <label for="">
                    E-mail :
                    <input name="email" type="email" placeholder="exemple@gmail.com" required>
                </label>
                <label for="">
                    Message :
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Écrivez votre message ici." required></textarea>
                </label>
                <button type="submit">Envoyer</button>
            </form>
        </div>
        <div class="col-6" id="cards">
            <div class="row mt-2">
                <div class="col-6">
                    <a href="https://www.instagram.com/space_jok/" target="_blank"><i class="fab fa-instagram-square"></i></a>
                </div>
                <div class="col-6">
                    <a href="https://www.facebook.com/William-Thomy-2168984776664613" target="_blank"><i class="fab fa-facebook-square"></i></a>
                </div>
            </div>
            <div class="row mt-4 mb-2">
                <div class="col-6">
                    <a href="https://www.artstation.com/williamthomy" target="_blank"><i class="fab fa-artstation"></i></a>
                </div>
                <div class="col-6">
                    <a href="william.thomy42@gmail.com" target="_blank"><i class="fas fa-envelope-square"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

