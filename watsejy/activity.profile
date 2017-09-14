<?xml version="1.0" encoding="utf-8"?>
<android.support.constraint.ConstraintLayout xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    tools:context="com.example.student.myapplication.profile">

    <LinearLayout
        android:layout_width="match_parent"
        android:layout_height="match_parent"
        android:orientation="vertical"
        android:padding="10dp">

        <TextView
            android:layout_width="wrap_content"
            android:text="Name"
            android:layout_height="wrap_content" />

        <EditText
            android:layout_width="match_parent"
            android:layout_height="wrap_content"
            android:id="@+id/etName"
            android:layout_marginBottom="10dp"/>

        <TextView
            android:layout_width="wrap_content"
            android:text="Username"
            android:layout_height="wrap_content" />

        <EditText
            android:layout_width="match_parent"
            android:layout_height="wrap_content"
            android:id="@+id/etUsername"
            android:layout_marginBottom="10dp"/>

        <TextView
            android:layout_width="wrap_content"
            android:text="Lastanme"
            android:layout_height="wrap_content" />

        <EditText
            android:layout_width="match_parent"
            android:layout_height="wrap_content"
            android:id="@+id/etLastname"
            android:layout_marginBottom="10dp"/>

        <TextView
            android:layout_width="wrap_content"
            android:text="Email"
            android:layout_height="wrap_content" />

        <EditText
            android:layout_width="match_parent"
            android:layout_height="wrap_content"
            android:id="@+id/etEmail"
            android:layout_marginBottom="10dp"/>

    </LinearLayout>


</android.support.constraint.ConstraintLayout>
