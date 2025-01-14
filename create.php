<?php
    $account = $_POST["account"] != '' ? $_POST["account"] : 'Account ( Only Allowed Digit or Alpha and Size Must Between 3 And 20 )';
    $password = $_POST["password"] != '' ? $_POST["password"] : 'Password ( Only Allowed Digit or Alpha and Size Must Between 6 And 12 )';

    if( $_POST["account"] != '' && $_POST["password"] != '' ){
        echo '
        <div style="width: 100%; height: 100%; padding: 2.5% 5% 2.5% 5%; background-color: rgb(0, 185, 142, 0.4); align-content: center; flex-wrap: wrap;">
            <h1 class="mb-4" style="font-size: 50px; color: white">Sign Up</h1>
            <div class="mb-2" style="height: 55px;">
                <input style="background-color: white" id="create-account" type="text" class="form-control border-0 py-3" value="' . $account . '" pattern="[a-zA-Z0-9]{3,20}" required>
            </div>
            
            <div class="mb-2" style="height: 55px;">
                <input style="background-color: white" id="create-password" type="password" class="form-control border-0 py-3" value="' . $password . '" pattern="[A-Za-z0-9]{6,12}" required>
            </div>

            <div class="mb-2" style="height: 55px;">
                <input style="background-color: white" id="create-phone" type="text" class="form-control border-0 py-3" placeholder="Phone Number ( 09##-###-### )" pattern="09\d{2}-\d{3}-\d{3}" required>
            </div>

            <div class="mb-2" style="height: 55px;">
                <input style="background-color: white" id="create-email" type="email" class="form-control border-0 py-3" placeholder="Email ( Only Allowed YZU Email )" pattern="(s\d{7}@mail | [A-Z a-z 0-9]+@saturn).yzu.edu.tw" required>
            </div>
            
            <div class="mb-4" style="height: 55px;">
                <select style="background-color: white" id="create-identity" class="form-control border-0 py-3" required>
                    <option value="" disabled selected>Choose Your Identity ( Required )</option>
                    <option value="teacher">Teacher</option>
                    <option value="student">Student</option>
                    <option value="others">Others</option>
                </select>
            </div>

            <div class="" style="height: 55px;" style="text-align: center;">
                <div id="create-error" style="width: 50%; height: 100%; float: left; align-content: center; flex-wrap: wrap;"></div>
                <button class="btn py-3 sign-in" style="color: white; font-size: 18px; float: right; width: 50%; border-width: 2px; border-color: white; border-radius: 40px" onclick="signUp()">Create</button>
            </div>
        </div>';
    }else if( $_POST["password"] != '' ){
        echo '
        <div style="width: 100%; height: 100%; padding: 2.5% 5% 2.5% 5%; background-color: rgb(0, 185, 142, 0.4); align-content: center; flex-wrap: wrap;">
            <h1 class="mb-4" style="font-size: 50px; color: white">Sign Up</h1>
            <div class="mb-2" style="height: 55px;">
                <input style="background-color: white" id="create-account" type="text" class="form-control border-0 py-3" placeholder="' . $account . '" pattern="[a-zA-Z0-9]{3,20}" required>
            </div>
            
            <div class="mb-2" style="height: 55px;">
                <input style="background-color: white" id="create-password" type="password" class="form-control border-0 py-3" value="' . $password . '" pattern="[A-Za-z0-9]{6,12}" required>
            </div>

            <div class="mb-2" style="height: 55px;">
                <input style="background-color: white" id="create-phone" type="text" class="form-control border-0 py-3" placeholder="Phone Number ( 09##-###-### )" pattern="09\d{2}-\d{3}-\d{3}" required>
            </div>

            <div class="mb-2" style="height: 55px;">
                <input style="background-color: white" id="create-email" type="email" class="form-control border-0 py-3" placeholder="Email ( Only Allowed YZU Email )" pattern="(s\d{7}@mail | [A-Z a-z 0-9]+@saturn).yzu.edu.tw" required>
            </div>
            
            <div class="mb-4" style="height: 55px;">
                <select style="background-color: white" id="create-identity" class="form-control border-0 py-3" required>
                    <option value="" disabled selected>Choose Your Identity ( Required )</option>
                    <option value="teacher">Teacher</option>
                    <option value="student">Student</option>
                    <option value="others">Others</option>
                </select>
            </div>

            <div class="" style="height: 55px;" style="text-align: center;">
                <div id="create-error" style="width: 50%; height: 100%; float: left; align-content: center; flex-wrap: wrap;"></div>
                <button class="btn py-3 sign-in" style="color: white; font-size: 18px; float: right; width: 50%; border-width: 2px; border-color: white; border-radius: 40px" onclick="signUp()">Create</button>
            </div>
        </div>';
    }else if( $_POST["account"] != '' ){
        echo '
        <div style="width: 100%; height: 100%; padding: 2.5% 5% 2.5% 5%; background-color: rgb(0, 185, 142, 0.4); align-content: center; flex-wrap: wrap;">
            <h1 class="mb-4" style="font-size: 50px; color: white">Sign Up</h1>
            <div class="mb-2" style="height: 55px;">
                <input style="background-color: white" id="create-account" type="text" class="form-control border-0 py-3" value="' . $account . '" pattern="[a-zA-Z0-9]{3,20}" required>
            </div>
            
            <div class="mb-2" style="height: 55px;">
                <input style="background-color: white" id="create-password" type="password" class="form-control border-0 py-3" placeholder="' . $password . '" pattern="[A-Za-z0-9]{6,12}" required>
            </div>

            <div class="mb-2" style="height: 55px;">
                <input style="background-color: white" id="create-phone" type="text" class="form-control border-0 py-3" placeholder="Phone Number ( 09##-###-### )" pattern="09\d{2}-\d{3}-\d{3}" required>
            </div>

            <div class="mb-2" style="height: 55px;">
                <input style="background-color: white" id="create-email" type="email" class="form-control border-0 py-3" placeholder="Email ( Only Allowed YZU Email )" pattern="(s\d{7}@mail | [A-Z a-z 0-9]+@saturn).yzu.edu.tw" required>
            </div>
            
            <div class="mb-4" style="height: 55px;">
                <select style="background-color: white" id="create-identity" class="form-control border-0 py-3" required>
                    <option value="" disabled selected>Choose Your Identity ( Required )</option>
                    <option value="teacher">Teacher</option>
                    <option value="student">Student</option>
                    <option value="others">Others</option>
                </select>
            </div>

            <div class="" style="height: 55px;" style="text-align: center;">
                <div id="create-error" style="width: 50%; height: 100%; float: left; align-content: center; flex-wrap: wrap;"></div>
                <button class="btn py-3 sign-in" style="color: white; font-size: 18px; float: right; width: 50%; border-width: 2px; border-color: white; border-radius: 40px" onclick="signUp()">Create</button>
            </div>
        </div>';
    }else{
        echo '
        <div style="width: 100%; height: 100%; padding: 2.5% 5% 2.5% 5%; background-color: rgb(0, 185, 142, 0.4); align-content: center; flex-wrap: wrap;">
            <h1 class="mb-4" style="font-size: 50px; color: white">Sign Up</h1>
            <div class="mb-2" style="height: 55px;">
                <input style="background-color: white" id="create-account" type="text" class="form-control border-0 py-3" placeholder="' . $account . '" pattern="[a-zA-Z0-9]{3,20}" required>
            </div>
            
            <div class="mb-2" style="height: 55px;">
                <input style="background-color: white" id="create-password" type="password" class="form-control border-0 py-3" placeholder="' . $password . '" pattern="[A-Za-z0-9]{6,12}" required>
            </div>

            <div class="mb-2" style="height: 55px;">
                <input style="background-color: white" id="create-phone" type="text" class="form-control border-0 py-3" placeholder="Phone Number ( 09##-###-### )" pattern="09\d{2}-\d{3}-\d{3}" required>
            </div>

            <div class="mb-2" style="height: 55px;">
                <input style="background-color: white" id="create-email" type="email" class="form-control border-0 py-3" placeholder="Email ( Only Allowed YZU Email )" pattern="(s\d{7}@mail|[A-Z a-z 0-9]+@saturn).yzu.edu.tw" required>
            </div>
            
            <div class="mb-4" style="height: 55px;">
                <select style="background-color: white" id="create-identity" class="form-control border-0 py-3" required>
                    <option value="" disabled selected>Choose Your Identity ( Required )</option>
                    <option value="teacher">Teacher</option>
                    <option value="student">Student</option>
                    <option value="others">Others</option>
                </select>
            </div>

            <div class="" style="height: 55px;" style="text-align: center;">
                <div id="create-error" style="width: 50%; height: 100%; float: left; align-content: center; flex-wrap: wrap;"></div>
                <button class="btn py-3 sign-in" style="color: white; font-size: 18px; float: right; width: 50%; border-width: 2px; border-color: white; border-radius: 40px" onclick="signUp()">Create</button>
            </div>
        </div>';
    }

    return;
?>