package com.example.adriencamara.webservice;

import android.app.ProgressDialog;
import android.content.Intent;
import android.os.StrictMode;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ProgressBar;
import android.widget.Toast;


import org.apache.http.HttpResponse;
import org.apache.http.NameValuePair;
import org.apache.http.client.ClientProtocolException;
import org.apache.http.client.HttpClient;
import org.apache.http.client.entity.UrlEncodedFormEntity;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.DefaultHttpClient;
import org.apache.http.message.BasicNameValuePair;
import org.json.JSONException;
import org.json.JSONObject;

import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

public class MainActivity extends AppCompatActivity {

    ProgressDialog  vprogress;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        if (android.os.Build.VERSION.SDK_INT > 9)
        {
            StrictMode.ThreadPolicy policy = new StrictMode.ThreadPolicy.Builder().permitAll().build();
            StrictMode.setThreadPolicy(policy);
        }

        Button inscrire = (Button) findViewById(R.id.inscrire);
        final EditText etnom = (EditText) findViewById(R.id.etnom);
        final EditText etprenom = (EditText) findViewById(R.id.etprenom);
        final EditText etclasse = (EditText) findViewById(R.id.etclasse);


        inscrire.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                final String prenom = etprenom.getText().toString();
                final String nom = etnom.getText().toString();
                final String classe= etclasse.getText().toString();

                //Appel de la fonction qui fait l'inscritption

                String resultatRequette = inscripEtudiant(nom,prenom,classe);
                Toast.makeText(MainActivity.this, resultatRequette, Toast.LENGTH_SHORT).show();
                //vprogress.dismiss();




            }
        });



    }

    //Inscription de letudiant
    public String inscripEtudiant(String Vnom,String Vprenom,String Vclasse){

        //Creation object type Httpclient
        HttpClient httpclient = new DefaultHttpClient();

        //Je definis l'url de l'api
        HttpPost httppost = new HttpPost("https://crankiest-engines.000webhostapp.com/registrer.php");


        //AJoute les champs du formulaire
        try {
            //Le nombre de champs est de 3 :nom , prenom ,classe
            List<NameValuePair> nameValuePairs = new ArrayList<NameValuePair>(3);
            nameValuePairs.add(new BasicNameValuePair("nom", Vnom));
            nameValuePairs.add(new BasicNameValuePair("prenom", Vprenom));
            nameValuePairs.add(new BasicNameValuePair("classe", Vclasse));
            httppost.setEntity(new UrlEncodedFormEntity(nameValuePairs));

            // Execute HTTP Post Request
            HttpResponse response = httpclient.execute(httppost);

        } catch (ClientProtocolException e) {
            // TODO Auto-generated catch block
            //vprogress.dismiss();
            return "Erreur Inscription";

        } catch (IOException e) {
            // TODO Auto-generated catch block
            //vprogress.dismiss();
            return "Erreur Inscription";
        }


            return "Inscription Reussie";


    }
}


