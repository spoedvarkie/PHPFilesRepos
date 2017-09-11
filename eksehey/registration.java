 package com.example.student.myapplication;

import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class registration extends AppCompatActivity implements View.OnClickListener{

    Button bRegister;
    EditText etUsername, etPassword, etName;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_registration2);



        etName = (EditText) findViewById(R.id.etName);
        etUsername = (EditText) findViewById(R.id.etUsername);
        etPassword = (EditText) findViewById(R.id.etPassword);
        bRegister = (Button) findViewById(R.id.bRegister);


        bRegister.setOnClickListener(this);






    }

    @Override
    public void onClick(View v) {
        switch(v.getId()){
            case R.id.bRegister:
                break;
    }

    }

}
