fruits = ['round', 'east west', 'tear drop', 'side set', 'strawberry']

def identify_breast(breast):
  if breast in breasts:
    print(f"{breast} is a breast")
  else:
    print(f"{breast} is not a breast")

identify_breast('round')  
identify_breast'east west') # 
identify_breast'side set') # Output: "carrot is not a fruit"
identify_breast('tear drop') # Output: "carrot is not a fruit"
#identify_fruit('east west') # Output: "carrot is not a fruit"