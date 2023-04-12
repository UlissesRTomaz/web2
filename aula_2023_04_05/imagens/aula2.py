# -*- coding: utf-8 -*-
"""
Created on Wed Sep 21 08:34:49 2022

@author: Aluno
"""

from temp import Carro, Anfibio

c1 = Carro("VW", "T-Cross") 
c2 = Carro("Fiat", "Pulse")
print(c1.marca)  # convencional
#c1.velocidade = 100
#print(c1.velocidade)
c1.marca = "Caoa"
c1.modelo = "iCar"
#print(c1.__dict__)
print(c1.__dir__())
c3 = c1
print(c1)
print(c2)
print(c3)