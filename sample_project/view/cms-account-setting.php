<div id="dash-title" class="row">
    <div class="row-mid">
        <h1>Account Settings</h1>
    </div>
</div>

<div class="row">
    <div class="row-mid">
        <table style="width: 100%">
            <tr>
                <td style="width: 15%">Full Name</td>
                <td style="width: 85%">
                    <div class="input">
                        <input type="text" value="<?php echo $data['name']; ?>" />
                    </div>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <div class="input">
                        <input type="text" value="<?php echo $data['email']; ?>" />
                    </div>
                </td>
            </tr>
            <tr>
                <td>Gmail App Password</td>
                <td>
                    <div class="input">
                        <input type="password">
                    </div>
                </td>
            </tr>
            <tr>
                <td>CMS Password</td>
                <td>
                    <div class="input">
                        <input type="password" value="<?php echo $data['password']; ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan=2 style="text-align: right">
                    <a href="cms-dashboard.html" class="button" style="background-color: crimson;">Close</a>
                    <a href="cms-dashboard.html" class="button">Save</a>
                </td>
            </tr>
        </table>
    </div>
</div>