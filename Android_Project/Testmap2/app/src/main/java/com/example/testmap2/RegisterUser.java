package com.example.testmap2;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.os.StrictMode;
import android.view.View;
import android.view.WindowManager;
import android.widget.AutoCompleteTextView;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import java.sql.ResultSet;

public class RegisterUser extends AppCompatActivity {
    TextView tv1;
    Button b1;
    EditText ed1,ed3,ed4,ed5,ed6;
    AutoCompleteTextView acTV1;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN, WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_register_user);
        StrictMode.ThreadPolicy policy = new StrictMode.ThreadPolicy.Builder()
                .detectAll()
                .penaltyLog()
                .build();
        StrictMode.setThreadPolicy(policy);
        b1 = findViewById(R.id.btnregisterz);
        tv1 = findViewById(R.id.loadlogz);
        ed1 = findViewById(R.id.edz1);
        ed3 = findViewById(R.id.edz3);
        ed4 = findViewById(R.id.edz4);
        ed5 = findViewById(R.id.edz5);
        ed6 = findViewById(R.id.edz6);
        tv1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                Intent intent =new Intent(RegisterUser.this,LoginUser.class);
                startActivity(intent);
            }
        });
        b1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                try {
                    String name = ed1.getText().toString();
                    String emailz = ed3.getText().toString();
                    String contactz = ed4.getText().toString();
                    String pw1 = ed5.getText().toString();
                    String pw2 = ed6.getText().toString();

                    if(name.equals("")  || emailz.equals("") || contactz.equals("") || pw1.equals("") || pw2.equals("")){

                        Toast.makeText(RegisterUser.this, "Please fill all feilds to continue..!", Toast.LENGTH_SHORT).show();
                    }else if(!(pw1.equals(pw2))){

                        Toast.makeText(RegisterUser.this, "Passwords are not matched..!", Toast.LENGTH_SHORT).show();

                    }else if(contactz.length() >10 || contactz.length()<10){
                        Toast.makeText(RegisterUser.this, "Please enter valid contact number..!", Toast.LENGTH_SHORT).show();

                    }else{
                        try {

                            String stat = "Active";
                            String ss = "select * from customer where emailz='"+emailz+"'";
                            ResultSet rs = DbConnection.search(ss);
                            if(rs.next()){

                                Toast.makeText(RegisterUser.this, "This Email address is already registered...!", Toast.LENGTH_SHORT).show();
                            }else{

                                String que_fir = "insert into `customer`\n" +
                                        "            (`cusnamez`,\n" +
                                        "             `emailz`,\n" +
                                        "             `contactz`,\n" +
                                        "             `statusz`,\n" +
                                        "             `passw`)\n" +
                                        "values ( '"+name+"',\n" +
                                        "        '"+emailz+"',\n" +
                                        "        '"+contactz+"',\n" +
                                        "        '"+stat+"',\n" +
                                        "        '"+pw1+"');";

                                DbConnection.iud(que_fir);
                                Toast.makeText(RegisterUser.this, "User Registered Succescfully..", Toast.LENGTH_LONG).show();
                                Intent intent =new Intent(RegisterUser.this,LoginUser.class);
                                startActivity(intent);
                            }



                        }catch (Exception ee){
                            Toast.makeText(RegisterUser.this, "err"+ee, Toast.LENGTH_LONG).show();
                        }
                    }


                }catch (Exception e){
                    Toast.makeText(RegisterUser.this, ""+e, Toast.LENGTH_LONG).show();
                }
            }
        });




    }
}