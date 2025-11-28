package hello;  // 软件包的意思
import java.util.Scanner;

//TIP 要<b>运行</b>代码，请按 <shortcut actionId="Run"/> 或
// 点击装订区域中的 <icon src="AllIcons.Actions.Execute"/> 图标。
public class hello {
   public static void main(String[] args){
       System.out.print("请输入第一位：");

       Scanner in = new Scanner(System.in);//用户输入
        //System.out.println(in.nextLine());
//       System.out.println("echo:"+ in.nextLine());
//       System.out.println("2+3="+(2+3));  //使用加号连接字符串添加括号控制优先级

       int price=0;   //定义变量
       int amount=100;
//       price = Integer.parseInt(in.nextLine());
       amount = in.nextInt();
       System.out.print("请输入第二位：");
       price = in.nextInt();
       System.out.println(amount+"-"+price+"="+(amount-price));
   }
}