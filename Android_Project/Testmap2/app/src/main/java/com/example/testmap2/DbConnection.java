package com.example.testmap2;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;

public class DbConnection {
    public static Connection c;
    public static String usernameloadingz;
    public static String emailzloadingz;
    public static String load_user_passwordz;
    public static String ShopNamez;

    public static Connection createCon() throws Exception {

        Class.forName("com.mysql.jdbc.Driver");
       // c = DriverManager.getConnection("jdbc:mysql://192.168.43.200:3307/finalhadcraft", "root", "123");
        //c = DriverManager.getConnection("jdbc:mysql://192.168.42.157:3307/finalhadcraft", "root", "123");
        //c = DriverManager.getConnection("jdbc:mysql://192.168.42.40:3307/finalhadcraft", "root", "123");
        c = DriverManager.getConnection("jdbc:mysql://192.168.1.10:3306/shopmapproject", "root", "");

        return c;

    }

    public static void iud(String sql) throws Exception {

        if (c == null) {
            createCon();
        }
        c.createStatement().executeUpdate(sql);
    }

    public static ResultSet search(String sql) throws Exception {

        if (c == null) {
            createCon();
        }
        return c.createStatement().executeQuery(sql);
    }

}
