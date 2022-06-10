import 'package:daily_report_tatelynv/screen/splash_screen.dart';
import 'package:flutter/material.dart';
import 'service/router.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Flutter Demo',
      theme: ThemeData(primarySwatch: Colors.amber, fontFamily: 'Montserrat'),
      home: const SplashScreen(),
      routes: {
        SPLASH_SCREEN: (BuildContext context) => const SplashScreen(),
      },
    );
  }
}
