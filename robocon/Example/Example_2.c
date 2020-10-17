#include <stdio.h>

/* 写在前面：
@  这个程序只作为示例，只是我想到的解题方法，可能并不是最好的解决方法，希望大家不要因为我的程序而限制住了思维。
@  这次题目相对简单，不做太多注释 
@  我在写这个程序的时候比较规范，体现在注释，缩进，变量定义（避免单字母或拼音变量名）这些方面。希望大家可以在写程序的时候也可以注意这些。
@  利用宏定义一些数字，方便阅读与日后修改程序 
@  运用了位操作，这个在单片机数据处理中很有用，希望大家都能掌握 
@  如果代码运行出现问题希望能反馈给我，并可以自己思考如何改正。 
@  Author:张钧杰   QQ：1652094603 
*/ 

typedef unsigned char u8;

int main()
{
	void Sum(void);
	void uart_receive(void);
	void super_receive(u8 *data);
	
	u8 receive[50] = {	0xaa,0xbb,0xaa,0xbb,0xaa,0xbb,0x55,0x76, 
						0x00,0x31,0x32,0xbb,0xaa,0xbb,0x97,0xac,
						0x23,0xaa,0xbb,0x56,0xaa,0xbb,0x32,0x22,
						0xaa,0x31,0xff,0xff,0xff,0xaa,0xbb,0xcc,
						0xdd,0xee,0xff,0xbb,0xdc,0xaa,0xbb,0xaa,
						0xbb,0x12,0x4a,0xad,0xaa,0xbf,0xf4,0x1a,
						0xcc,0x12 };
	
	Sum();
	uart_receive();
	super_receive(receive);
}
 
 
 
//基础题（一） 
void Sum()
{
	int n = 0;
	float sum = 0.0f;
	printf("基础题（一）\n请输入整数n：");
	scanf("%d",&n);
	if(n <= 0)
	{
		printf("非法字符！\n请重新输入\n\n");
		Sum();
	}
	else
	{
		while(n)
		{
			sum += 1.0f / n--;
		}
		printf("结果为%.2f\n",sum);
	}
}

#define DATA_LENGTH   8
#define FIRST_BIT     0xaa
#define SECOND_BIT    0xbb
//基础题（二） 
void uart_receive()
{
	u8 InputNum[DATA_LENGTH];
	int CheckBit,Data[2];
	int i = 0;
	printf("\n基础题（二）\n请输入8个十六进制数：");
	for(i=0; i<DATA_LENGTH; i++)
	{
		scanf("%x",&InputNum[i]);
	}
	Data[0] = InputNum[2]<<8 | InputNum[3];			//高八位左移8位或上低八位，左移八位相当于乘2的八次，在此基础上或运算相当于加 
	Data[1] = InputNum[4]<<8 | InputNum[5];
	CheckBit = InputNum[6]<<8 | InputNum[7];
	if(CheckBit == ((Data[0] + Data[1]) & 0xffff) && (InputNum[0]&0xff) == FIRST_BIT && (InputNum[1]&0xff) == SECOND_BIT)
		printf("correct\n");		//&0xffff表示取后16位，如果不能理解，再看一下位运算   &0xff 同理，取后8位 
	else
		printf("error\n");
}

//发挥题 
void super_receive(u8 *data)
{
	int i;
	int CheckBit,Data[2];
	printf("\n发挥题\n");
	for(i=0; i<43; i++)			//剩下7位不够8位 ，就不判断了 
	{
		if(*data==FIRST_BIT && *(data+1) == SECOND_BIT)
		{
			Data[0] = *(data+2)<<8 | *(data+3);		//如果遇到0xaa，0xbb则对后面6位进行校验 
			Data[1] = *(data+4)<<8 | *(data+5);
			CheckBit = *(data+6)<<8 | *(data+7);
			if(CheckBit == ((Data[0] + Data[1]) & 0xffff)) 		//如果校验成功，输出有效数据 
			{
				int j = 0;
				printf("有效数据：");
				for(j=0; j<DATA_LENGTH; j++)
				{
					printf("%x",*(data+j));
					if(j!=DATA_LENGTH-1)
					{
						printf(" ");
					}
					else
					{
						printf("\n");
					}
				}							//校验成功后，应题目要求，不应当再取使用过的数据，因此指针特殊处理 
				data += DATA_LENGTH;		//指针向后移动8位，表示省略中间判断 
				i += DATA_LENGTH-1;			//data指针移动8位，相应地，i也应增加8，而for语句中i++，i存在一次加一，因此这里只需加7 
			}								//使用while语句会更加清晰明了 
			else			//如果校验失败，则指针向后移动一位 
			{
				data++;
			 } 
		}						
		else		//如果没有遇到0xaa并且后一位不是0xbb，则指针向后移动一位 
		{
			data++;
		 } 
	 } 
}

