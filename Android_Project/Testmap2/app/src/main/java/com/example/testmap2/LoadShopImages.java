package com.example.testmap2;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;

import android.content.Context;
import android.content.Intent;
import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.os.Bundle;
import android.os.StrictMode;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.view.WindowManager;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.ListView;
import android.widget.TextView;
import android.widget.Toast;

import com.bumptech.glide.Glide;
import com.bumptech.glide.request.RequestOptions;

import java.io.File;
import java.net.URL;
import java.sql.ResultSet;
import java.util.ArrayList;

public class LoadShopImages extends AppCompatActivity {
    ListView listView;
    ArrayList<LoadProducts> arrayList;
    ArrayAdapter adp;
    TextView tv;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN, WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_load_shop_images);
        StrictMode.ThreadPolicy policy = new StrictMode.ThreadPolicy.Builder()
                .detectAll()
                .penaltyLog()
                .build();

        listView = findViewById(R.id.rvlistz);
        arrayList = new ArrayList<LoadProducts>();

        try {
            String shopz = DbConnection.ShopNamez;
            tv =findViewById(R.id.txttitlz);
            tv.setText("These are the products that published by "+shopz);

            String sqlload = "SELECT * FROM productdetails where shopnamez='"+shopz+"' and statusz='Active'";
            ResultSet rs = DbConnection.search(sqlload);
            while (rs.next()){

                LoadProducts i = new LoadProducts();
                i.proname=rs.getString("pronamez");
                i.desc=rs.getString("proprice");
                i.imgurl = rs.getString("proimgurl");

                arrayList.add(i);
            }

            missingloadAdapter my = new missingloadAdapter(this,arrayList);
            listView.setAdapter(my);

        }catch (Exception ee){
            Toast.makeText(this, "err--"+ee, Toast.LENGTH_SHORT).show();
        }




    }
    class missingloadAdapter extends ArrayAdapter {
        Context c;
        ArrayList<LoadProducts> list;

        public missingloadAdapter(Context context ,ArrayList<LoadProducts> ar) {

            super(context, R.layout.activity_load_shop_images,ar);
            c= context;
            list = ar;
        }
        @NonNull
        @Override
        public View getView(int position, @Nullable View convertView, @NonNull ViewGroup parent) {
            LayoutInflater li =(LayoutInflater) c.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
            final View v= li.inflate(R.layout.layout_candidate_details_design,null);

            final LoadProducts loadTimeTables = list.get(position);







            try {

                final TextView electionnamez =(TextView) v.findViewById(R.id.candidate_name);
                electionnamez.setText("Product Name : "+loadTimeTables.proname);

                final TextView dateheldz =(TextView) v.findViewById(R.id.candidate_des);
                dateheldz.setText("Unit Price: LKR "+loadTimeTables.desc);


                ImageView mImage = v.findViewById(R.id.loadingimgz);
                Glide.with(LoadShopImages.this).load(loadTimeTables.imgurl).into(mImage);

            }catch (Exception ee){
                Toast.makeText(LoadShopImages.this, "---"+ee, Toast.LENGTH_LONG).show();
            }





            return v;
        }


    }

}