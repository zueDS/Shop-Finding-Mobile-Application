package com.example.testmap2;

import androidx.annotation.NonNull;
import androidx.fragment.app.FragmentActivity;

import android.content.Intent;
import android.os.Bundle;
import android.os.StrictMode;
import android.widget.Toast;

import com.google.android.gms.maps.CameraUpdateFactory;
import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.OnMapReadyCallback;
import com.google.android.gms.maps.SupportMapFragment;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.LatLngBounds;
import com.google.android.gms.maps.model.Marker;
import com.google.android.gms.maps.model.MarkerOptions;
import com.example.testmap2.databinding.ActivityMapsBinding;

import java.io.Console;
import java.sql.ResultSet;

public class MapsActivity extends FragmentActivity implements OnMapReadyCallback, GoogleMap.OnMarkerClickListener {

    private GoogleMap mMap;
    private ActivityMapsBinding binding;
    private Marker myMarker;
    private Marker myMarker2;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        StrictMode.ThreadPolicy policy = new StrictMode.ThreadPolicy.Builder()
                .detectAll()
                .penaltyLog()
                .build();
        StrictMode.setThreadPolicy(policy);

        binding = ActivityMapsBinding.inflate(getLayoutInflater());
        setContentView(binding.getRoot());

        // Obtain the SupportMapFragment and get notified when the map is ready to be used.
        SupportMapFragment mapFragment = (SupportMapFragment) getSupportFragmentManager()
                .findFragmentById(R.id.map);
        mapFragment.getMapAsync(this);
    }

    /**
     * Manipulates the map once available.
     * This callback is triggered when the map is ready to be used.
     * This is where we can add markers or lines, add listeners or move the camera. In this case,
     * we just add a marker near Sydney, Australia.
     * If Google Play services is not installed on the device, the user will be prompted to install
     * it inside the SupportMapFragment. This method will only be triggered once the user has
     * installed Google Play services and returned to the app.
     */
    @Override
    public void onMapReady(GoogleMap googleMap) {

        try {
            mMap = googleMap;
            mMap.setOnMarkerClickListener(this);




            String sqlload = "SELECT * FROM userdetails";
            ResultSet rs = DbConnection.search(sqlload);
            while (rs.next()){
                String latz = rs.getString("latitute");
                String longz = rs.getString("longtute");
                String shopnamez = rs.getString("shopname");
                LatLng sydney = new LatLng(Double.parseDouble(latz), Double.parseDouble(longz));
                mMap.addMarker(new MarkerOptions().position(sydney).title(shopnamez));
                mMap.moveCamera(CameraUpdateFactory.newLatLng(sydney));
            }





        }catch (Exception ee){
            Toast.makeText(this, "err--"+ee, Toast.LENGTH_SHORT).show();
        }
    }




    @Override
    public boolean onMarkerClick(@NonNull Marker marker) {

       String shopname = marker.getTitle();
       DbConnection.ShopNamez = shopname;
       Intent ii = new Intent(MapsActivity.this,LoadShopImages.class);
        startActivity(ii);

        return false;
    }
}