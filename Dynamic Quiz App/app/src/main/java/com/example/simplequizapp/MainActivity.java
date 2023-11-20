package com.example.simplequizapp;

import androidx.annotation.DrawableRes;
import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;

import android.annotation.SuppressLint;
import android.content.DialogInterface;
import android.graphics.Color;
import android.os.Bundle;
import android.os.PersistableBundle;
import android.view.View;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
    RadioGroup rg;
    RadioButton A,B,C,D;
    TextView text,totq;
    int i=0,len=0,cnt=0,flag=0;
    AlertDialog.Builder alert;
    Toast myToast;


    String[] qstn = {
            "Which is Small in size?",
            "What is Android?",
            "কম্পিউটারের প্রধান প্রিন্টেড সার্কিট বোর্ডকে বলা হয়?",
            "The speed of processor of a computer is measured in ____.",
            "The main two components of CPU are ____.",
            "Identify the incorrect pair from the following:",

            "Which of the following hardware was used by the first generation computers?",
            "Python is:",
            "Which of the following sites are examples of Social Networking ?",
            "e-Mail stands for:",
            "A type of memory that holds the computer startup routine is",

            "Speed of Internet is measured in",
            ".temp is a :",
            "Which of the following is a type of volatile memory?",
            "The term one Gigabyte refers to:",
            "Which of the following is an example of OS?",

            "What is the full form of URL ?",
            "How many cells are there in the cell range F4 : P10?",
            "Which one is an Input Device?",
            "The decimal equivalent of the binary number 11001 is"
    };


    String[][] optn = {
            {"RAM","ROM","Register","Cache"},
            {"platform","Open Source","Operating System","All"},
            {"মাইক্রো প্রসেসর","হার্ডওয়্যার","মাদারবোর্ড","স্মৃতিশক্তি"},
            {"GHz", "MHz" , "MBps" , "KHz"},
            {"Control unit and ALU" , "ALU and BUS" , "Control unit and register" , "Registers and main memory"},
            {".jpg - graphic file" , ".ttf - word text file" , ".wav - audio file" , ".exe - executable file "},

            {"Transistors" , "Vacuum tubes" , "VLSI" , "Integrated circuits"},
            {"a snake" , "an operating system" , "a programming language" , "a compiler"},
            {"Linkedin" , "Pinterest" ,"Instagram" ,"All"},
            {"Electronic man" , "Electromagnetic mail" , "Electronic mail" , "Engine mail"},
            {"Cache" , "RAM" , "DRAM" , "ROM"},

            {"Mbps" , "Gbps" , "Kbps" , "dpi"},
            {"transit file" , "transitional file" , "temporary file" , "transfer file"},
            {"SRAM" , "Flash Memory" , "EEPROM" , "Hard Disk"},
            {"1024 Petabytes" , "1024 Megabytes" , "1024 Kilobytes" , "1024 Bytes"},
            {"Firefox" , "Internet Explorer" , "Microsoft Office" , "Microsoft Windows"},

            {"User Requested Link" , "Ultimate Response Location" , "Unique Request Locator" , "Uniform Resource Locator"},
            {"66" , "60" , "70" , "77"},
            {"Hard disk drive" , "Floppy disk drive" , "Computer monitor" , "Keyboard "},
            {"03" , "19" , "25" , "38 "}

    };

    String[] ans = {
            "C","D","C","A","A","B",
            "B","C","D","C","D",
            "A","C","A","B","D",
            "D","D","D","C"

    };

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        len = qstn.length;
        rg = findViewById(R.id.rg);

        A = (RadioButton) findViewById(R.id.A);
        B = (RadioButton) findViewById(R.id.B);
        C = (RadioButton) findViewById(R.id.C);
        D = (RadioButton) findViewById(R.id.D);

        A.setText(optn[i][0]);
        B.setText(optn[i][1]);
        C.setText(optn[i][2]);
        D.setText(optn[i][3]);

        text = (TextView) findViewById(R.id.qstn);
        text.setText("Q"+(i+1)+". "+qstn[i]);  // current Q no.

        totq = findViewById(R.id.totq);
        totq.setText("Total Questions : "+len+"\nCorrect : "+cnt+"/"+(i));
    }

    protected void all(){    // show from i=1


        A.setText(optn[i][0]);
        B.setText(optn[i][1]);
        C.setText(optn[i][2]);
        D.setText(optn[i][3]);

        //text = (TextView) findViewById(R.id.qstn);
        text.setText("Q"+(i+1)+". "+qstn[i]);

        totq.setText("Total Questions : "+len+"\nCorrect : "+cnt+"/"+(i));


    }

    protected void zero(){  // set bg = w ...... from red
        A.setBackgroundColor(0);
        B.setBackgroundColor(0);
        C.setBackgroundColor(0);
        D.setBackgroundColor(0);
    }

    @SuppressLint("ResourceType")
    public void run(View v) throws InterruptedException {


        if(v.getId()==R.id.A){

            if(ans[i]=="A"){  // jodi thik hoy
                if(flag==0) cnt++;   // correct hobe 1st clk a
                myToast = Toast.makeText(this,"Correct",Toast.LENGTH_SHORT);
                myToast.show();
                Thread.sleep(100);
                myToast.cancel();
                zero();  // call for reset clr
                flag=0;
            }
            else{
                A.setBackgroundColor(Color.RED);
                myToast = Toast.makeText(this,"Wrong",Toast.LENGTH_SHORT);
                myToast.show();
                Thread.sleep(100);
                myToast.cancel();
                i--; flag=1;
            }
            A.setChecked(false);
        }


        if(v.getId()==R.id.B){

            if(ans[i]=="B"){
                if(flag==0) cnt++;
                myToast = Toast.makeText(this,"Correct",Toast.LENGTH_SHORT);
                myToast.show();
                Thread.sleep(100);
                myToast.cancel();
                zero();
                flag=0;
            }
            else{
                B.setBackgroundColor(Color.RED);
                myToast = Toast.makeText(this,"Wrong",Toast.LENGTH_SHORT);
                myToast.show();
                Thread.sleep(100);
                myToast.cancel();
                i--; flag=1;
            }
            B.setChecked(false);
        }


        if(v.getId()==R.id.C){

            if(ans[i]=="C"){
                if(flag==0) cnt++;
                myToast = Toast.makeText(this,"Correct",Toast.LENGTH_SHORT);
                myToast.show();
                Thread.sleep(100);
                myToast.cancel();
                zero();
                flag=0;
            }
            else{
                C.setBackgroundColor(Color.RED);
                myToast = Toast.makeText(this,"Wrong",Toast.LENGTH_SHORT);
                myToast.show();
                Thread.sleep(100);
                myToast.cancel();
                i--; flag=1;
            }
            C.setChecked(false);
        }


        if(v.getId()==R.id.D){

            if(ans[i]=="D"){
                if(flag==0) cnt++;
                myToast = Toast.makeText(this,"Correct",Toast.LENGTH_SHORT);
                myToast.show();
                Thread.sleep(100);
                myToast.cancel();
                zero();
                flag=0;
            }
            else{
                D.setBackgroundColor(Color.RED);
                myToast = Toast.makeText(this,"Wrong",Toast.LENGTH_SHORT);
                myToast.show();
                Thread.sleep(100);
                myToast.cancel();
                i--; flag=1;
            }
            D.setChecked(false);
        }

        i++;

        if(i==len){
            alert = new AlertDialog.Builder(this);
            //final TextView scr = new TextView(getApplicationContext());
            //scr = findViewById(R.id.scr);
            //scr.setText("Total Question : "+len+"\nCorrect : "+cnt+"\nWrong : "+(len-cnt));
            //scr.setTextSize(20);
            alert.setCancelable(false);

            alert.setMessage("Total Question    : "+len+"\nCorrect Answer  : "+cnt+"\nWrong Answer    : "+(len-cnt));
            alert.setPositiveButton("Retry", new DialogInterface.OnClickListener() {
                @Override
                public void onClick(DialogInterface dialogInterface, int j) {
                    i=0; cnt=0; all();
                }
            });
            alert.setNegativeButton("Close", new DialogInterface.OnClickListener() {
                @Override
                public void onClick(DialogInterface dialogInterface, int i) {
                    MainActivity.this.finish();
                }
            });
            //alert.setView(scr);
            alert.show();
        }

        else
            all();

    }
}