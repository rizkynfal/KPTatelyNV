import '/service/router.dart';
import 'package:flutter/material.dart';

class LoginScreen extends StatefulWidget {
  const LoginScreen({Key? key}) : super(key: key);

  @override
  State<LoginScreen> createState() => _LoginScreenState();
}

class _LoginScreenState extends State<LoginScreen> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: SizedBox(
        width: 300,
        height: 400,
        child: Center(
            child: Column(
          children: <Widget>[
            Text(
              "LOGIN",
              style: TextStyle(
                color: fontMainColor,
              ),
            )
          ],
        )),
      ),
    );
  }
}
