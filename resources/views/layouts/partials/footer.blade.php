
        <footer>
            <div class="contents-image">
                <img src="{{ asset('assets/img/msig.png') }}" alt="" />
            </div>

            <div class="footer-content contents">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4 footer-button">
                                <a href="#">MSIG App download</a>
                            </div>
                            <div class="col-md-4 footer-button">
                                <a href="#" class="icon border-right"><i class="fab fa-facebook-square"></i></a>
                                <a href="#" class="icon border-right"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="icon border-right"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="icon "><i class="fas fa-comments"></i></a>
                            </div>
                            <div class="col-md-3 footer-button">
                                <a href="#">Contact Us</a>
                            </div>
                            
                            <div class="col-md-4 footer-button margin-top-20">
                                <a href="#">Print</a>
                                <a href="#">Email</a>
                            </div>
                            
  
                        </div>
                    </div>
                    <div class="col-md-4 footer-image">
                        <img src="{{ asset('assets/img/msig-detail.jpg') }}" alt="" />
                    </div>
                </div>
                <div class="copyright">
                                <div class="container">
                                    <div class="row">
                                    All Rights Reserved. Copyright &copy; {{date('Y')}} | MSIG Insurance (Hong Kong) Limited
                                    </div>
                                </div>
                            </div>
            </div>

        </footer>
    </div>

 <!-- jquery main JS -->
 <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
 <!-- Bootstrap JS -->
 <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('assets/js/fontawesome.min.js') }}"></script>
 <!-- owl carousel JS -->
 <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-fzff82+8pzHnwA1mQ0dzz9/E0B+ZRizq08yZfya66INZBz86qKTCt9MLU0NCNIgaMJCgeyhujhasnFUsYMsi0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
 @stack(
 'custom-js'
 )
</body>
</html>