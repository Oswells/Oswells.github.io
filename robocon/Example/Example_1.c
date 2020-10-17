#include <stdio.h>

/*写在前面：
@  这个程序只作为示例，只是我想到的解题方法，可能并不是最好的解决方法，希望大家不要因为我的程序而限制住了思维。
@  基础题较为简单，我不做太多的注释，主要在发挥题处进行较多的注释。 
@  我在写这个程序的时候比较规范，体现在注释，缩进，变量定义（避免单字母或拼音变量名）这些方面。希望大家可以在写程序的时候也可以注意这些。
@  这套代码是我匆忙写出来的，没有做太多的扩展，也没有进行太多的调试，如果出现问题希望能反馈给我，并可以自己思考如何改正。 
@  Author:张钧杰   QQ：1652094603 
*/ 

int main()
{
	//函数声明 
	void Find_Max();
	void Calculator();
	void Fmax();
	
	//函数调用 
	Find_Max();		//基础题（一），找到3个数中最大值 
	Calculator();	//基础题（二），四则运算 
	Fmax();			//发挥题 
}

//基础题（1）：找到3个数中最大值 
void Find_Max()
{
	float a,b,c;
	float Max;
	printf("第一题\n请输入3个要比较大小的值：");
	scanf("%f %f %f",&a,&b,&c);
	Max = a>b?a:b;
	Max = Max>c?Max:c;
	printf("输入的最大值为%.2f\n",Max);
}

//基础题（二）：四则运算 
//拓展：若输入错误，则提示重新输入 
void Calculator()
{
	float x,y,result = 0.0f;
	int z;
	printf("\n第二题\n请输入运算的2个数和运算方式（1为加法，2为减法，3为乘法，4为除法）：");
	scanf("%f%f%d",&x,&y,&z);
	switch(z)
	{
		case 1:
		{
			result = x+y;
			printf("运算结果为%.2f\n",result);
			break;
		}
		case 2:
		{
			result = x-y;
			printf("运算结果为%.2f\n",result);
			break;
		}	
		case 3:
		{
			result = x*y;
			printf("运算结果为%.2f\n",result);
			break;
		}	
		case 4:
		if(y!=0)
		{
			result = x/y;
			printf("运算结果为%.2f\n",result);
		}
		else
		{
			printf("除法运算除数不能为零！请从新输入！\n");
			Calculator(); 
		}
		break;
		default:
		{ 
			printf("请输入正确的运算方式！请从新输入！\n");
			Calculator(); 
			break;
		} 
	}
}

//发挥题：输入参数数量和各个参数，计算最大值，如果输入不是数字，则返回错误信息
//拓展：若输入错误，则提示重新输入 
void Fmax()
{
	int para_quantity = 0;		//参数数量 
	char inputs[20][20];		//一般来说我们输入的参数不会多于20个   每个参数的长度不会超过20个字节  也可以用mallco函数 
	float number[20];			//用来记录输入的数 
	float max_num = 0.0f;		//用来记录最大的数 
	int i; 
	for(i=0; i<20; i++)
	{
		number[i]=0.0f;
	}
	printf("\n发挥题\n请输入参数个数和参数：");
	scanf("%d",&para_quantity);		//输入参数数量 
	for(i=0; i<para_quantity; i++)
	{
		scanf("%s",inputs[i]);	//根据参数数量读取对应数量的字符串 
	}
	for(i=0; i<para_quantity; i++)	//此for语句的目的是将char型数组转换为数字 
	{
		char *str;			//用来暂存输入的第i维字符串 即输入的第i个元素 
		float dot_flag = 1.0f;		//小数点标志位，若出现小数点则改变此标志位 
		str=inputs[i];		//读取第i维字符串 
		while(*str!=0)		//使用指针遍历字符串   也可以用for语句实现   
		{
			if(*str>='0' && *str<='9')	//判断这位是否是数字 
			{
				if(dot_flag==1)		//如果未出现小数点 
				{
					number[i] = 10*number[i] + (*str-'0');		//字符为ASCII码，转数字需要减去'0' 
				}
				else				//如果此前出现小数点 
				{
					number[i]+= (*str-'0')*dot_flag;	//a+=c 即  a=a+c  下面*=同理 
					dot_flag*=dot_flag;
				}
			}
			else if(*str == '.' && dot_flag == 1.0f && inputs[i][0]!='.')		//如果这一位是小数点 
			{
				dot_flag = 0.1f;		//改变小数点标志位 
			}
			else		//如果输入的不是数字或小数点 
			{
				printf("你确定输入的是个数字吗？！\n请重新输入\n");
				para_quantity = 0;	//改变参数个数为0，保证后面不输出
				Fmax(); 
				break;		//不再判断下一维数组 
			 } 
			 str++;			//指向字符串的下一位 
		}
	}
	if(para_quantity)		//如果输入参数不为0 
	{
		for(i=0;i<para_quantity;i++)		//上面已经将字符串转成数字，这里比较转换来的数字大小 
		{
			max_num = max_num>number[i]?max_num:number[i];
		}
		printf("%.2f",max_num);		//输出最大值 
	}
}

