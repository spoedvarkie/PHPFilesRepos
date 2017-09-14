<LinearLayout xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    android:orientation="vertical"
    android:padding="10dp"
    >

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
        android:text="Password"
        android:layout_height="wrap_content" />

    <EditText
        android:layout_width="match_parent"
        android:layout_height="wrap_content"
        android:id="@+id/etPassword"
        android:inputType="textPassword"
        android:layout_marginBottom="10dp"/>
    
    <Button
        android:layout_width="match_parent"
        android:id="@+id/bLogin"
        android:text="Login"
        android:layout_height="wrap_content" />
		
	 <TextView
        android:id="@+id/tvRegisterLink"
		android:layout_width="wrap_content"
        android:text="Register Here"
		android:textStyle="bold"
		android:layout_gravity="center_horizontal"
        android:layout_height="wrap_content" />

    </LinearLayout>
	
	
	
	
	
	
	
	
	





