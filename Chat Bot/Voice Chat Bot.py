# -*- coding: utf-8 -*-
"""
Created on Fri Feb 17 11:32:11 2023

1. Speech Recognition
2. Text to speech
3. py audio

this take so much time : pip install playsound==1.2.2
latest version not working

@author: KHAYRUL
"""


import speech_recognition as sr
import pyttsx3
import datetime
import pywhatkit
import wikipedia
import pyjokes

import textwrap

import tkinter as tk
from tkinter import *
#from tkinter import tkinter as tk
#from PIL import ImageTk, Image

# from chatterbot import ChatBot
# from chatterbot.trainers import ChatterBotCorpusTrainer

import os

from playsound import playsound

from gtts import gTTS

if os.path.exists('hello.mp3'):
    os.remove('hello.mp3')


listener = sr.Recognizer()
robot = pyttsx3.init()

voices = robot.getProperty('voices')
robot.setProperty('voice', voices[1].id)
robot.setProperty('rate', 100)

text = "হাই আমি রোবট  ক্রিস্টিনা ,  আমি আপনাকে কিভাবে সাহায্য করতে পারি স্যার "

# if os.path.exists('hello.mp3'):
#     os.remove('hello.mp3')
    
# if os.path.exists('nidhi.mp3'):
#     playsound('nidhi.mp3',True)
    
def talk(text):
    robot.say(text)
    robot.runAndWait()
    


def bangla_voice(text):
    tts = gTTS( text ,  lang='bn')
    tts.save('hello.mp3')
 
def bangla_play():
    if os.path.exists('hello.mp3'):
        playsound('hello.mp3')
        
        os.remove('hello.mp3')
    
# bangla_voice(text)
# bangla_play()
shutdown = 0
night=0
morning=0
noon=0

def take_command():
    
    try:
        
        with sr.Microphone() as source:
            
            print('Listening......')
            
            listener.adjust_for_ambient_noise(source)
            
            voice = listener.listen(source,5,10)
            
            command = listener.recognize_google(voice, language='eng-bn')
            
            command_bangla = listener.recognize_google(voice, language='bn')
            
            command = command.lower();
            
            query = textF.get()
            msgs.insert(END, "you : " + query)
            #print(type(answer_from_bot))
            
            print(command)
            #talk(command)
            
            print(command_bangla)
            
            if 'christina' in command or 'kristina' in command:
                command = command.replace('christina','')
                command = command.replace('kristina','')
                
            else:
                command=command
                #bangla_voice(text)
        
        
    except:
        command = "Hi"
    
    return command

def run_robot(msg):
    
    command = msg
    ans='None'
    
    print('com = '+command)
    
    
    
    if 'time' in command:
        time = datetime.datetime.now().strftime('%I:%M %p')
        print(time)
        #talk('Current time is' + time)
        ans='Current time is ' + str(time)
        
    elif  "সময়"  in command:
        time = datetime.datetime.now().strftime('%I:%M %p')
        print(time)
        bangla_voice('এখন সময় হচ্ছে' )
        bangla_play()
        talk(time)
        ans='এখন সময় হচ্ছে '  + str(time)
        
        
    elif 'joke' in command:
        joke=pyjokes.get_jokes(language='en')
        print(joke)
        #talk(joke)
        ans=joke
        
    elif 'tell me about' in command or 'what is' in command:
        #look_for = command.replace('tell me about', '')
        #look_for = command.replace('what is', '')
        #print('Looking for :' + look_for)
        
        try:
            info = wikipedia.summary(command, 1)
            print(info)
            #talk(info)
        except:
            ans="I don't know"
        
                
        
    elif 'i love you' in command:
        talk('I love you too shona')
        ans='I love you too shona'
        
   
        
    return ans

    
    



main = tk.Tk()

#img = PhotoImage(file="bot.png")

main.geometry("600x680")

main.title("My Chat bot")



#photoL = Label(main,image=img,width=500,height=100)

#photoL.pack(pady=5)



def start():
    query = textF.get()
    
    print(query)
    
    query=str(query)
    
    if query=='' :
        query = take_command()
    
        
    #talk(query)
    
    #print(query)
    
    
    lines = textwrap.wrap(query, width=40)
    for line in lines:
        msgs.insert(END, "You : " + line)
    
    
    textF.delete(0,END)
    msgs.yview(END)
    
    
    answer = run_robot(query)
    answer = str(answer)
    
    #print('answer:' + answer)
    
    if answer=='':
        answer='None'
    
    line2 = textwrap.wrap(answer, width=50)
    for line in line2:
        msgs.insert(END, "Bot : " + line)
        
    textF.delete(0, END)
    msgs.yview(END)
    talk(answer)
    





frame=Frame(main)

sc=Scrollbar(frame)
msgs=Listbox(frame,width=50,height=20,yscrollcommand=sc.set)

sc.pack(side=RIGHT, fill=Y)

msgs.pack(side=LEFT, fill=BOTH, pady=10)

frame.pack()


textF = Entry(main, font=("Verdana", 15))
textF.pack(fill=X, pady=10)


btn = Button(main, text="Ask from bot", font=("Verdana", 20), command=start)
btn.pack()


def enter_function(event):
    btn.invoke()
    
main.bind('<Return>', enter_function)



main.mainloop()










