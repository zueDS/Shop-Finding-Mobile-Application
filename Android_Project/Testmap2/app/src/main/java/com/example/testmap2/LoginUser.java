package com.example.testmap2;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.os.StrictMode;
import android.util.Log;
import android.view.View;
import android.view.WindowManager;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import java.sql.ResultSet;

public class LoginUser extends AppCompatActivity {
    Button bz;
    TextView tv1;
    EditText username,passw;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN, WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_login_user);
        StrictMode.ThreadPolicy policy = new StrictMode.ThreadPolicy.Builder()
                .detectAll()
                .penaltyLog()
                .build();
        StrictMode.setThreadPolicy(policy);

        username = findViewById(R.id.usernamelogz);
        passw = findViewById(R.id.passwordlogz);
        tv1 = findViewById(R.id.gotoregister);
        bz = findViewById(R.id.logz);

        tv1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent ii = new Intent(LoginUser.this,RegisterUser.class);
                startActivity(ii);

            }
        });

        bz.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String unman = username.getText().toString();
                String pass1 = passw.getText().toString();
                try{
                    if(unman.equals("") || pass1.equals("")){
                        Toast.makeText(LoginUser.this, "Please fill all the feilds..", Toast.LENGTH_SHORT).show();
                    }else {
                        String searchquer = "select * from customer where emailz='" + unman + "' and passw='" + pass1 + "'";
                        ResultSet rs = DbConnection.search(searchquer);
                        if (rs.next()) {

                            DbConnection.emailzloadingz = unman;
                            DbConnection.usernameloadingz = rs.getString("cusnamez");
                            DbConnection.load_user_passwordz = pass1;
                            Toast.makeText(LoginUser.this, "Login sucess", Toast.LENGTH_SHORT).show();
                            Intent intent = new Intent(LoginUser.this, MapsActivity.class);
                            startActivity(intent);

                        } else {
                            Toast.makeText(LoginUser.this, "Invalid login details", Toast.LENGTH_SHORT).show();
                        }
                    }

                }catch(Exception e){
                    Toast.makeText(LoginUser.this, "---"+e, Toast.LENGTH_SHORT).show();
                }
            }
        });

    }
}