#include <stdio.h>

/*写在前面：
@  很抱歉因为我的贪玩，这次示例没有及时更新 
@  这个程序只作为示例，只是我想到的解题方法，可能并不是最好的解决方法，希望大家不要因为我的程序而限制住了思维。 
@  这套代码如果出现问题希望能反馈给我，并可以自己思考如何改正。 
@  这里我使用了#ifdef  #endif的方法让多个main文件可以同时存在于一个c文件中，可以学习一下
@  C语言的任务已经结束了，希望大家在寒假里可以多巩固一下，另外可以去学习单片机，进度快的同学在到学校后可以有更多的机会接触实验室的资源 
@  Author:张钧杰   QQ：1652094603 
*/ 

//这是通过宏定义来实现一个C文件中存在多个main的方法 
//注释掉其中两行来选择执行对应的程序 
//#define FirstQuestion		//第一问 
#define SecondQuestion	//第二问 
//#define ThirdQuestion		//第三问 

typedef unsigned int u32;
typedef unsigned char u8;

//如果定义了 FirstQuestion 那么执行下面的程序 
#ifdef FirstQuestion
char *ToLowerCase(char *str)
{
	u8 i=0;
	while(str[i]!=0)	//遍历字符串中的每一个字符 
	{
		if(str[i]>='A' && str[i]<='Z')		//判断是否是A-Z 
		{
			str[i] -= ('A'-'a');
		} 
		i++;		//索引自加一 
	}
	return str;
}
int main()
{
	char UpperCase[20],*LowerCase;
	printf("这是第一题\n请输入英文字母，我会将其转换为小写："); 
	scanf("%s",UpperCase);
	LowerCase = ToLowerCase(UpperCase);
	printf("输入字母的小写形式是：%s",LowerCase);
	return 0;
}
#endif		//与#ifdef相对应 ，有ifdef就要有#endif 


//如果定义了 SecondQuestion 那么执行下面的程序 
#ifdef SecondQuestion

int Compositor(int *data,char *dir,int len)
{
	int i,j,temp;
	for(i=0;i<len-1;i++)		//冒泡排序 
	{
		for(j=i+1;j<len;j++)
		{
			if(dir=="up")		//判断方向 
			{
				if(data[i]>data[j])		//判断大小 
				{
					temp=data[i];	//替换对应位 
					data[i]=data[j];
					data[j]=temp;
				}
			}
			else if(dir=="down")		//判断方向 
			{
				if(data[i]<data[j])			//判断大小 
				{
					temp=data[i];		//替换对应位 
					data[i]=data[j];
					data[j]=temp;
				}
			 } 
		}
	}
	printf("data={");		//打印排好序的数组 
	for(i=0;i<len;i++)
	{
		if(i!=len-1)
			printf("%d,",data[i]);
			else
			printf("%d};\n",data[i]);
	}
}

int main()
{
    int Compositor(int*,char*,int len);  //函数声明
    
    int data1[]={1,7,4,8};
    int data2[]={1,4,7,2,3,99,25};
	
	int Data1Len = sizeof(data1) / sizeof(data1[0]);	//数组长度，因为我们无法通过指向数组的指针得到数组的长度
	int Data2Len = sizeof(data2) / sizeof(data2[0]);	//因此我选用这种方法来得知数组长度，可能还有更好的方法 
	
	printf("这是第二题\n"); 
	
    Compositor(data1,"up",Data1Len);
    Compositor(data2,"down",Data2Len);

    return 0;
}

#endif		//与#ifdef相对应 ，有ifdef就要有#endif 


//如果定义了 ThirdQuestion 那么执行下面的程序 
#ifdef ThirdQuestion

int main()
{
	char orgmat[10000];		//original matrix ,原矩阵 
	char finmat[100][100];	//final matrix,最后的矩阵 
	char *str;				//指向原矩阵数组的指针 
	char data[10000];		//中间数据，用来存储原矩阵中的数字 
	int col=0,row=0;		//原矩阵的列和行，为最后矩阵的行和列 
	int datacnt=0;			//data索引 
	
	printf("这是第三题\n请输入矩阵:"); 
	scanf("%s",orgmat);		//输入原矩阵 
	str=orgmat;
	
	while(*str)				//提取原矩阵中的数字，并存入data数组中 
	{
		if(*str=='[')
			row++;
		else if(*str>='0' && *str<='9')
			*(data+datacnt++) = *str;	
		str++;	
	}
	
	row--;  //’['左括号的个数比矩阵的行数多一，所以需减一 
	col=datacnt/row;
	datacnt=0;
	
	for(int i=0;i<row;i++)
	{
		for(int j=0;j<col;j++)
		{
			*(finmat[j]+i)=*(data+datacnt++);		//将矩阵对角翻转 
		}
	}
	
	printf("转置后的矩阵为:[");		//按要求打印矩阵 
	for(int i=0;i<col;i++)
	{
		printf("[");
		for(int j=0;j<row;j++)
		{
			printf("%c",*(finmat[i]+j));
			if(j<row-1)
				printf(",");
		}
		printf("]");
		if(i<col-1)
			printf(",");
	}
	printf("]");
}

#endif		//与#ifdef相对应 ，有ifdef就要有#endif 



