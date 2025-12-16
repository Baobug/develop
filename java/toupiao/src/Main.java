//判断车票

import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
//        初始化
        Scanner in = new Scanner(System.in);
        //读取投金额
        System.out.print("请投币：");
        int amoumt = in.nextInt();
        //打印车票
        if (amoumt>=10){
            System.out.println("******************");
            System.out.println("Java城际铁路专线");
            System.out.println("无指定座位票");
            System.out.println("票价十元");
            System.out.println("******************");
            //计算找零
            System.out.println(amoumt>=10);
            System.out.println("找零："+(amoumt-10)+"元");
        }else {
            System.out.println("投币金额不足");
        }



    }
}