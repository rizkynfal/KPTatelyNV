import 'package:daily_report_tatelynv/service/router.dart';
import 'package:flutter/material.dart';

class HomeScreen extends StatefulWidget {
  const HomeScreen({Key? key}) : super(key: key);

  @override
  State<HomeScreen> createState() => _HomeScreenState();
}

class _HomeScreenState extends State<HomeScreen> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
        backgroundColor: mainBgColor,
        body: Container(
          margin: EdgeInsets.all(50),
          child: const Text(
            "INI HOME SCREEN",
            style: TextStyle(fontWeight: FontWeight.bold),
          ),
        ));
  }
}
