@include('common.header')
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Registration</h2>
                <form method="POST" class="register-form" id="register-form">
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="User Name" required/>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="User Email" required/>
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password" required/>
                    </div>
                    <div class="form-group">
                        <label for="age"><i class="zmdi zmdi-lock-outline"></i></label>
                        <select name="age" id="age" required>
                            <option value="" disabled selected>Select Age</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="course"><i class="zmdi zmdi-book"></i></label>
                        <select name="course" id="course" required>
                            <option value="" disabled selected>Select Course</option>
                            <option value="math">Math</option>
                            <option value="science">Science</option>
                            <option value="history">History</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    {{-- <div class="form-group">
                        <label for="re_pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="password_confirmation" id="re_pass" placeholder="Repeat your password" required/>
                    </div> --}}
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="{{asset('common/images/signup-image.jpg')}}" alt="sing up image"></figure>
                <a href="{{route('login')}}" class="signup-image-link">I am already registered</a>
            </div>
        </div>
    </div>
</section>
@include('common.footer')
