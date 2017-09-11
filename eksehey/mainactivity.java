  package com.example.student.myapplication;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

public class MainActivity extends AppCompatActivity implements View.OnClickListener{

    Button bLogout;
    EditText etUsername, etName;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        etName = (EditText) findViewById(R.id.etName);
        etUsername = (EditText) findViewById(R.id. etUsername)};
        bLogout = (Button) findViewById(R.id.bLogout);
        bLogout.setOnClickListener(this);

}

@Override
    public void onClick(View v) {
        switch(v.getId()){
            case R.id.bLogout:
				startActivity(new Intent(this, Login.class));
                break;
    }
}
