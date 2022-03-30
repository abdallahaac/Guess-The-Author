import requests
import urllib.request
from csv import writer
from bs4 import BeautifulSoup as bs


authors = []
quotes = []


def scrapeWebsite(page_number, search_term):
    page_num = str(page_number)
    url = f"https://www.goodreads.com/quotes/search?commit=Search&page={page_num}&q={search_term}&utf8=%E2%9C%93"
    webpage = requests.get(url)
    soup = bs(webpage.text, "html.parser")
    quoteText = soup.find_all("div", class_="quoteText")

    for i in quoteText:
        quote = i.text.strip().split('\n')[0]
        author = i.find('span', class_="authorOrTitle").text.replace(
            ',', '').strip()
        quotes.append(quote)
        authors.append(author)


n = 10
for num in range(0, n):
    scrapeWebsite(num, 'Robert greene')


combine_list = []
with open('roberthoyo.csv', 'w', encoding='utf-8', newline='') as file:
    thewriter = writer(file)
    header = ['Quote', 'Author']
    thewriter.writerow(header)

    for i in range(len(quotes)):
        combine_list.append(quotes[i] + "-" + authors[i])
        info = [quotes[i], authors[i]]
        thewriter.writerow(info)
